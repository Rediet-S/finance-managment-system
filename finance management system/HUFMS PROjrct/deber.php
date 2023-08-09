<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<style type="text/css">
<!--
body
{
background-image: url(../back.jpg);
}
-->
</style>
<body>
<h1> FROM STUDENT REGISTERED RESULTS</h1>
<?php
$searchtype=$_POST['searchtype'];
$searchterm=$_POST['searchterm'];
$searchterm=trim($searchterm);
if(!$searchtype || !$searchterm)
{
echo'Please enter the delete details.';
	exit;
}
$con= mysql_connect('localhost','root','');
if(!$con)
{
	echo'Error';
	exit;
}
mysql_select_db('harar');
$query="delete from compus where ".$searchtype." = '".$searchterm."'";
$result=mysql_query($query);
if($result)
{
echo mysql_affected_rows().' record(s) Deleted';
}
else
{
echo 'No record deleted';
}
$db = mysql_connect("localhost", "root", "");
mysql_select_db("harar",$db);
$result = mysql_query("SELECT * FROM compus ",$db);
echo "</TABLE>";
?>
</body>
</HTML>