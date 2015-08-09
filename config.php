<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "8169x5it";
$mysql_database = "reg_form";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

?>
