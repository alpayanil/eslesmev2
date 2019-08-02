<?php 
include "./Modul/ekletablosu.php";
session_start();
$_SESSION["uid"] = $arrayResp["uid"];
$_SESSION["name"] = $arrayResp["givenName"];
$_SESSION["surname"] = $arrayResp["sn"];
$_SESSION["storenumber"]= $arrayResp["storenumber"];

if ($_SESSION["storenumber"] == "TRHQ2") {
 

}
$_SESSION["jobname"] = $arrayResp["jobname"];
 
$_SESSION["title"] = $arrayResp["title"];
$_SESSION["storenumber"] = $arrayResp["site"];
$_SESSION["country"] = $arrayResp["c"];
$_SESSION["logoutpisri"] = $decodejws;
echo $_SESSION["jobname"];
?>
