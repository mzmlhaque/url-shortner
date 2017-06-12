<?php

$con = mysql_connect("localhost","username","password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("DB NAME", $con); //Replace with your MySQL DB Name


$de= mysql_real_escape_string($_GET["decode"]);
 


$sql = 'select * from TABLE NAME where shortened="$de"';

$result=mysql_query("select * from TABLE NAME where shortened='$de'");

while($row = mysql_fetch_array($result))
{
$res=$row['url'];
header("location:".$res);
}

?>