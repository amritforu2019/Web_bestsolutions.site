<?php

global $getCurrentHost,$getCurrentURL;
$getCurrentHost=$_SERVER['HTTP_HOST'];
$getCurrentURL="/Testing/Web_Geolifecare.com";
//echo 'website is under construction... ';
//exit;
$host = "localhost";
if($getCurrentHost=='localhost')
{
    $username = "root";
    $password = "";
}
else
{
    $username = "bestsolutions";
    $password = "Nq5yJDLvWzmccOmg";
}



$host = "localhost";


/////////////////////////////////
$db = "bestsolutions";
 
global $DB_LINK;
// Create connection
  $DB_LINK = new mysqli($host, $username, $password, $db);
if (!$DB_LINK) 
{
    echo "Server Busy";
    die("Server Busy kindly wait.." . mysqli_connect_error());
	exit;
}


/////////////////////////////////////////////////////////////
///
///      $DB["dbName"] = "gnfmaste_comdb";
//	 $DB["host"]   = "localhost";
//	 $DB["user"]   = "gnfmaste_alluser";
//	 $DB["pass"]   = "H4BD00LPfne!";
/*
$host1 = "localhost";
if($getCurrentHost=='localhost')
{
    $username1 = "root";
    $password1 = "";
}
else
{
	$username1 = "u812455012_user_com";
	$password1 = "D6>@M52phs9d";
}


/////////////////////////////////
$db1 = "u812455012_gnfglobal_com";

global $DB_LINK1;
// Create connection
$DB_LINK1 = new mysqli($host1, $username1, $password1, $db1);
if (!$DB_LINK1) {
    echo "Server Busy";
    die("Server Busy kindly wait.." . mysqli_connect_error());
    exit;
}


/////////For GNF Record COnnection /////////////////
$host3 = "localhost";
$username3 = "u812455012_reporting_user";
$password3 = "X;BhhF[kg2F^";
$db3 = "u812455012_gnf_reporting";
global $DB_LINK3;
// Create connection
  $DB_LINK3 = new mysqli($host3, $username3, $password3, $db3);
if (!$DB_LINK3)
{
    die("Connection timeout !! Server Busy kindly wait.." . mysqli_connect_error());
    exit;
}*/

?>