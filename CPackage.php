<?php
/*
 * Author: congzhao@mail.ustc.edu.cn
 * Date: 2012/09/09
 * Desc: This file contain a class which contain the data and method of a Package.
 */
require_once('db/db_init.php');
class CPackage{
	private $szName;	//name
	private $szVersion;	//version
	private $szUrl;		//url
	private $szSummary;	//summary
	private $uFileSize;	//filesize
	private $uInstallSize;	//install_size
	private $szCategory;//category
	private $szDistName;	//dist name
	private $szLicense;	//license
	private $szHomepage;	//homepage
	private $szExtension;	//extension
	private $szMaintainer;	//maintainer
	private $szMaintainerUrl;	//maintainerUrl
	private $szBugUrl;	//bug_url
	private $szIcon;	//icon
	private $szDescription;	// description
	
	private $uPid;		//pack pid
	private $uDid;		//dist did
	private $uRid;		//repo rid

	/*
	 *	in: $name,$dist
	 *	out:
	 *	fill all the field of CPackage from database
	 */
	public function CPackage($name, $dist = 'ubuntu'){
		// get the package infomation
		$sql = "SELECT * FROM cz_pack WHERE name = '".$name."' and did = (SELECT did FROM cz_dist WHERE name = '".$dist."')";
		$result = mysql_query($sql) or die("Database query error");
		$rows = mysql_fetch_array($result, MYSQL_ASSOC);

		if (empty($rows))
			throw new Exception("Package Not Found");

		// fill the package infomation field
		$this->szName = $rows["name"];
		$this->szVersion = $rows["version"];
		$this->szUrl = $rows["url"];
		$this->szSummary = $rows["summary"];
		$this->uFileSize = $rows["filesize"];
		$this->uInstallSize = $rows["install_size"];
		$this->szExtension = $rows["extension"];

		$this->uPid = $rows["pid"];
		$this->uDid = $rows["did"];
		$this->uRid = $rows["rid"];
	}

	/*
	 * the accessors
	 */
	public function getszName(){
		return $this->szName;
	}
	public function getszVersion(){
		return $this->szVersion;
	}
	public function getszUrl(){
		return $this->szUrl;
	}
	public function getszSummary(){	       
                return $this->szSummary;
	}
	public function getuFileSize(){
	       if($this->uFileSize<1024)
		{
			return $this->uFileSize."B";
		}
	       else {
			$size_KB=(float)$this->uFileSize/1024;
			if($size_KB<1024)
			{
				return $size_KB."KB";
			}
			else return ((float)$size_KB/1024)."MB";
		}
	}
	public function getuInstallSize(){
		 if($this->uInstallSize<1024)
                {
                        return $this->uInstallSize."KB";
                }
               else {
                        $size_KB=(float)$this->uInstallSize/1024;
                        if($size_KB<1024)
                        {
                                return $size_KB."MB";
                        }
                }

	}
	public function getszExtension(){
		return $this->szExtension;
	}
	public function getszCategory(){
		$sql = "SELECT name FROM cz_section WHERE sid IN (SELECT sid FROM cz_sec_pack WHERE pid = ".$this->uPid.")";
		$result = mysql_query($sql);
		$nums = mysql_num_rows($result);
		for($i = 0; $i < $nums; $i++){
			$rows = mysql_fetch_array($result, MYSQL_ASSOC);
			$this->szCategory .= $rows["name"]." ";
		}
		return $this->szCategory;
	}
	public function getszDistName(){
		$sql = "SELECT name FROM cz_dist WHERE did = ".$this->uDid;
		$result = mysql_query($sql);
		$rows = mysql_fetch_array($result, MYSQL_ASSOC);
		$this->szDistName = $rows["name"];
		return $rows["name"];
	}
	public function getszLicense(){
		$sql = "SELECT license FROM cz_pack_detail WHERE pid = ".$this->uPid;
		$result = mysql_query($sql);
		$rows = mysql_fetch_array($result, MYSQL_ASSOC);
		$this->szLicense = $rows["license"];
		return $this->szLicense;
	}
	public function getszHomepage(){
		$sql = "SELECT homepage FROM cz_pack_detail WHERE pid = ".$this->uPid;
		$result = mysql_query($sql);
		$rows = mysql_fetch_array($result, MYSQL_ASSOC);
		$this->szHomepage = $rows["homepage"];
		return $this->szHomepage;
	}
	public function getszMaintainer(){
		$sql = "SELECT maintainer FROM cz_pack_detail WHERE pid = ".$this->uPid;
		$result = mysql_query($sql);
		$rows = mysql_fetch_array($result, MYSQL_ASSOC);
		$this->szMaintainer = $rows["maintainer"];
		return $this->szMaintainer;
	}
	public function getszMaintainerUrl(){
		$sql = "SELET maintainerUrl FROM cz_pack_detail WHERE pid = ".$this->uPid;
		$result = mysql_query($sql);
		$rows = mysql_fetch_array($result, MYSQL_ASSOC);
		$this->szMaintainerUrl = $rows["maintainerUrl"];
		return $this->szMaintainerUrl;
	}
	public function getszBugUrl(){
		$sql = "SELECT bug_url FROM cz_pack_detail WHERE pid = ".$this->uPid;
		$result = mysql_query($sql);
		$rows = mysql_fetch_array($result, MYSQL_ASSOC);
		$this->szBugUrl = $rows["bug_url"];
		return $this->szBugUrl;
	}
	public function getszIcon(){
		$sql = "SELECT icon FROM cz_pack_detail WHERE pid = ".$this->uPid;
		$result = mysql_query($sql);
		$rows = mysql_fetch_array($result, MYSQL_ASSOC);
		$this->szIcon = $rows["icon"];
		return $this->szIcon;
	}
	public function getszDescription() {
		$sql = "SELECT description FROM cz_pack_detail WHERE pid = ".$this->uPid;
		$result = mysql_query($sql);
		$rows = mysql_fetch_array($result, MYSQL_ASSOC);
		$this->szDescription = $rows["description"];
		return $this->szDescription;
	}
}

//$package = new CPackage('firefox', 'ubuntu');
//var_dump($package);
?>
