#!/bin/bash
MYSQL="mysql -u root -e"
DATABASE=software
TABLEPRE=software.cz_
FIFO1=query1.sql
FIFO2=query2.sql

function clean {
	rm $1 >/dev/null 2>&1
}

# Usage: load_gz debian debian/dists/.../Packages.gz did rid
function load_gz {
	parser=$1
	url=$2
	did=$3
	rid=$4
	echo -n "$url "
	zipname=`basename $url`
	newname=`basename -s .gz $url`
	clean $zipname
	clean $newname
	echo -n "Downloading... "
	wget http://mirrors.ustc.edu.cn/$url >/dev/null 2>&1
	echo -n "Unzip... "
	gunzip $zipname
	clean $zipname # redundant
	echo -n "Parse & Load... "
	php parse_$parser.php $newname $FIFO1 $FIFO2 $did $rid 2>/dev/null &
	$MYSQL "USE $DATABASE; source $FIFO1;" &
	$MYSQL "USE $DATABASE; source $FIFO2;"
	echo "Done."
	rm $newname
}

function newdist {
	$MYSQL "INSERT INTO ${TABLEPRE}dist SET name='$1';"
	echo "NEW DIST did=$2, name=$1"
}
function newrepo {
	$MYSQL "INSERT INTO ${TABLEPRE}repo SET did=$1, name='$2';"
	echo "NEW REPO did=$1, rid=$3, name=$2"
}

echo "Cleaning..."
clean $FIFO1
mkfifo $FIFO1
mkfifo $FIFO2

$MYSQL "DROP DATABASE $DATABASE;"
echo "Creating Database structure..."
$MYSQL "source ../db/grant.sql;"
$MYSQL "use $DATABASE; source ../db/cong.sql;"

distnum=1

function load_deb() {
	dist=$1
	repolist=$2
	typelist=$3
	arch=$4
	newdist $dist $distnum
	reponum=1
	for repo in $repolist; do
		newrepo $distnum $repo $reponum
		for t in $typelist; do
			load_gz debian $dist/dists/$repo/$t/$arch/Packages.gz $distnum $reponum
		done
		((reponum=reponum+1))
	done
	((distnum=distnum+1))
}

load_deb deepin "maverick natty oneiric precise quantal unstable" main binary-i386
load_deb debian "squeeze stable testing unstable wheezy sid rc-buggy Debian6.0.5" "main contrib non-free" binary-amd64
load_deb ubuntu "hardy lucid maverick natty oneiric precise quantal" "main multiverse restricted universe" binary-amd64

rm $FIFO1
rm $FIFO2
