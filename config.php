<?php
$dbhost ="localhost";
$dbuser	="root";
$dbpassword ="secret";
$dbdatabase ="wms";

$config_blogname ="An Expert System for Optimization of Solid <br />Waste Management in Malaysia <br /> (OpSWaste System)";

$config_author = "Army";
$config_basedir = "http://127.0.0.1/wms/";
$conn = mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbdatabase, $conn);
?>
