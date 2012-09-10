SET time_zone = "+00:00";
SET NAMES utf8;

CREATE DATABASE IF NOT EXISTS software;
GRANT ALL PRIVILEGES ON software.* TO 'software-www'@'localhost' identified by '3Mjs9Kql';

USE software;

/**
 * Notes on table structure
 * 1. All columns which might appear in condition of a query with a result
 *    set larger than 100 rows, should be indexed.
 * 2. Most tables should be subject to Boyce-Codd Normal Form, while
 *    some redundancy can be used to improve performance (e.g. the number of
 *    posts in a thread which is to be displayed in the forum page).
 * 3. All fields referencing another table should be a FOREIGN KEY,
 *    and such fields should be numeric to ensure performance.
 * 4. All nouns should be in single form.
 * 5. All words should be in lower case and separated by an underscore.
 * 6. All primary keys (IDs) should be different. Here are some of them:
	uid		user
	did		distribution
	rid		repository
	aid		architecture
	pid		package
	tid		package type (rpm, deb)
	sid		section (Games, Net...)
	fid		file
 */
/**
 * Notes on queries
 * 1. All column names should be quoted by `, all data should be quoted by '.
 * 2. All input should be sanitized before forming the query string.
 * 3. When retrieving data, objects should be used instead of associasive arrays.
 */
/**
 * Overall data structure
 * dist:
 *   Distribution
 * repo:
 *   Repository (squeeze, core, ...)
 *   Belong to distribution.
 * arch:
 *   Architecture (x86_64, i386)
 *   In different dists, naming conventions (nickname) for each arch may be different.
 * pack:
 *   Package
 *   A package is denoted by (dist, repo, arch, pack) theorically, however
 *     package name and description are the same for each (dist, repo, pack)
 *     and only download link varies among archs.
 *   We wish to further combine the same software among different dists, however
 *     package names vary among dists, and this work cannot be done manually,
 *     so we restrict this feature to maually uploaded packages.
 *   A package may have multiple comments.
 *   Since packages are under high query load, it is separated into two tables,
 *     one hold basic info, the other hold long strings...
 * section:
 *   Classification of package.
 *   Sections are manually created and the packages are classified into
 *     sections automatically by Section, Tag, or group in repo_data.
 * file:
 *   Locally stored packages, mainly non-open-source or non-free software.
 *   A (package, arch) may be related to an uploaded file. A file may be used by
 *     multiple dists.
 *   A file is of a package type (rpm, deb...)
 *   We considered the approach of calculating a hash for each file and store files
 *     by hash (like Git), while it requires a program outside Web server to send
 *     files, which may hit performance. So we choose to let Apache and filesystem go.
 *   File names should be distinct, which lowers the possibility of uploading existing packs.
 */

CREATE TABLE IF NOT EXISTS cz_user (
	`uid` INT(10) NOT NULL AUTO_INCREMENT,
	`username` CHAR(20) NOT NULL, -- username should not exceed 20 chars
	`password` CHAR(40) NOT NULL, -- md5(md5(real_pass), salt)
	`salt` CHAR(10) NOT NULL,
	`is_admin` BOOL NOT NULL DEFAULT false,
	PRIMARY KEY (`uid`),
	INDEX key_username(`username`)
);

CREATE TABLE IF NOT EXISTS cz_dist (
	`did` INT(10) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL,
	`description` TEXT,
	PRIMARY KEY (`did`),
	INDEX key_name(`name`)
);

CREATE TABLE IF NOT EXISTS cz_repo (
	`rid` INT(10) NOT NULL AUTO_INCREMENT,
	`did` INT(10) NOT NULL,
	`name` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`rid`),
	FOREIGN KEY (`did`) REFERENCES cz_dist(`did`)
);

CREATE TABLE IF NOT EXISTS cz_arch (
	`aid` INT(10) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`aid`)
);

CREATE TABLE IF NOT EXISTS cz_arch_dist (
	`aid` INT(10) NOT NULL,
	`did` INT(10) NOT NULL,
	`nickname` VARCHAR(50) NOT NULL,
	FOREIGN KEY (`aid`) REFERENCES cz_arch(`aid`),
	FOREIGN KEY (`did`) REFERENCES cz_dist(`did`)
);

CREATE TABLE IF NOT EXISTS cz_section (
	`sid` INT(10) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`sid`)
);

CREATE TABLE IF NOT EXISTS cz_pack (
	`pid` INT(10) NOT NULL AUTO_INCREMENT,
	`did` INT(10) NOT NULL, -- distribution id, redundant if considering rid
	`rid` INT(10) NOT NULL, -- repo id
	`sid` INT(10), -- section id (can be null)
	`filesize` INT(10) NOT NULL, -- package size
	`install_size` INT(10) NOT NULL,
	`rate_total` INT(10) NOT NULL DEFAULT 0, -- SUM(rates)
	`rate_count` INT(10) NOT NULL DEFAULT 0, -- COUNT(rates)
	`create_time` INT(10) NOT NULL, -- timestamp of creation of this row
	`update_time` INT(10) NOT NULL, -- last update timestamp of this row
	`recommend` TINYINT(1) NOT NULL, -- 0 for normal, 1 for section recommend, 2 for distribution recommend
	`name` VARCHAR(255) NOT NULL, -- package name
	`version` VARCHAR(255) NOT NULL, -- package version
	`url` VARCHAR(255) NOT NULL, -- download url
	`checksum_md5` CHAR(32),
	`checksum_sha1` CHAR(40),
	`checksum_sha256` CHAR(64),
	`architecture` VARCHAR(255) NOT NULL,
	`section` VARCHAR(255), -- DEB only
	`bug_url` VARCHAR(255), -- issue tracker (optional)
	`homepage` VARCHAR(255),
	`license` VARCHAR(255), -- RPM only
	`maintainer` VARCHAR(255), -- maintainer or packager
	`priority` VARCHAR(255), -- DEB only
	`summary` VARCHAR(255) NOT NULL, -- short description
	`provides` VARCHAR(255),
	`suggests` VARCHAR(255),
	`conflicts` VARCHAR(255),
	`depends` TEXT,
	`description` TEXT,
	`icon` BLOB, -- binary image data
	PRIMARY KEY (`pid`),
	FOREIGN KEY (`did`) REFERENCES cz_dist(`did`),
	FOREIGN KEY (`rid`) REFERENCES cz_repo(`rid`),
	FOREIGN KEY (`sid`) REFERENCES cz_section(`sid`),
	INDEX key_name(`name`)
);

-- Tag of DEB, rpm:group of RPM, section of DEB
-- For quick search: separated by :: for DEB or / for RPM
CREATE TABLE IF NOT EXISTS cz_pack_tag (
	`pid` INT(10) NOT NULL,
	`top_tag` VARCHAR(127) NOT NULL, -- top level tab
	`sub_tag` VARCHAR(127), -- second level tab. If no separator in original tag then NULL
	FOREIGN KEY (`pid`) REFERENCES cz_pack(`pid`),
	INDEX key_top_tag(`top_tag`),
	INDEX key_sub_tag(`sub_tag`)
);

CREATE TABLE IF NOT EXISTS cz_pack_depend (
	`pid` INT(10) NOT NULL,
	`dep` INT(10) NOT NULL, -- pack pid depends on pack dep
	`version` VARCHAR(31) NOT NULL, -- minimum dep version. NULL for no limit
	FOREIGN KEY (`pid`) REFERENCES cz_pack(`pid`),
	FOREIGN KEY (`dep`) REFERENCES cz_pack(`pid`)
);

CREATE TABLE IF NOT EXISTS cz_pack_arch (
	`pid` INT(10) NOT NULL,
	`aid` INT(10) NOT NULL,
	`fid` INT(10), -- reference cz_file if manually uploaded
	`link` VARCHAR(255) NOT NULL, -- download link
	-- should also be set if manually uploaded, since we may one day move
	-- the files away from local storage
	FOREIGN KEY (`pid`) REFERENCES cz_pack(`pid`),
	FOREIGN KEY (`aid`) REFERENCES cz_arch(`aid`)
);

CREATE TABLE IF NOT EXISTS cz_pack_comment (
	`cid` INT(10) NOT NULL AUTO_INCREMENT,
	`pid` INT(10) NOT NULL,
	`status` ENUM('show', 'auditing', 'deleted') NOT NULL,
	`time` INT(10) NOT NULL, -- unix timestamp
	`rate` INT(10) NOT NULL, -- rate for package
	`author` VARCHAR(50) NOT NULL,
	`homepage` VARCHAR(255), -- optional
	`email` VARCHAR(255) NOT NULL,
	`content` TEXT NOT NULL,
	PRIMARY KEY (`cid`),
	FOREIGN KEY (`pid`) REFERENCES cz_pack(`pid`),
	INDEX key_time (`time`),
	INDEX key_status (`status`),
	INDEX key_author (`author`)
);

-- for example rpm, deb
CREATE TABLE IF NOT EXISTS cz_pack_type (
	`tid` TINYINT(3) NOT NULL AUTO_INCREMENT,
	`pack_type` VARCHAR(20) NOT NULL,
	PRIMARY KEY (`tid`)
);

CREATE TABLE IF NOT EXISTS cz_file (
	`fid` INT(10) NOT NULL AUTO_INCREMENT,
	`upload_time` INT(10) NOT NULL, -- unix timestamp
	`pack_type` TINYINT(3) NOT NULL,
	`download_count` INT(10) NOT NULL DEFAULT '0',
	`file_size` INT(10) NOT NULL,
	`filename` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`fid`),
	FOREIGN KEY (`pack_type`) REFERENCES cz_pack_type(`tid`),
	INDEX key_filename (`filename`)
);
