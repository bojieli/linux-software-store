<?php
/*
 * Author: congzhao@mail.ustc.edu.cn
 * Date: 2012/09/09
 * Desc: This file contain a class which contain the data and method of a Package.
 */
require_once('db_init.php');
class CPackage{
	private $szName;	//name
	private $szVersion;	//version
	private $szUrl;		//url
	private $szSummary;	//summary
	private $uFileSize;	//filesize
	private $uInstallSize;	//install_size
	private $uDid;		//dist did
	private $uRid;		//repo rid
	public $sid;		//section sid

	/*
	 *	in: $name,$dist
	 *	out:
	 *	fill all the field of CPackage from database
	 */
	public function CPackage($name, $dist = 'ubuntu'){
		//get the package infomation
		$sql = "SELECT * FROM cz_pack WHERE name = '".$name."' and did = (SELECT did FROM cz_dist WHERE name = '".$dist."')";
		$result = mysql_query($sql) or die("Database query error");
		$rows = mysql_fetch_array($result, MYSQL_ASSOC);

		//fill the package infomation field
		$this->szName = $rows["name"];
		$this->szVersion = $rows["version"];
		$this->szUrl = $rows["url"];
		$this->szSummary = $rows["summary"];
		$this->uFileSize = $rows["filesize"];
		$this->uInstallSize = $rows["install_size"];
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
		return $this->uFileSize;
	}
	public function getuInstallSize(){
		return $this->uInstallSize;
	}
}

//$package = new CPackage('firefox', 'ubuntu');
//var_dump($package);
?>
