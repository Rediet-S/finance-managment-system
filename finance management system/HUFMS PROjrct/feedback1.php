<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<html>
</head>
<html>
<style type="text/css">
<!--
body
{
background-image: url(../../Users/why/model.jpg);
}
-->
</style>
<body>

<table background="white">
<tr>
<td>
<body>
<?php
$user=$_POST['user'];
$email=$_POST['email'];
$country=$_POST['country'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];
if(!$user||!$email ||!$country||!$phone||!$comment)
{
echo 'you have not entered search details';
exit;
}
$username = 'root';
$password = '';
$hostname = 'localhost'; 
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password);
$selected = mysql_select_db("hufms",$dbhandle);
$query="insert into feedback values('".$user."','".$email."','".$country."','".$phone."','".$comment."')";
$result=mysql_query($query);
if($result)
{
echo mysql_affected_rows();
}
else
{
echo 'The student is not inserted into the database';

}
$db = mysql_connect("localhost", "root","");
mysql_select_db("hufms",$db);
$result = mysql_query("SELECT * FROM feedback ",$db);
echo'<center><table bgcolor="#eeee7" border="8">';
echo'<TR><TD  bgcolor="orange" width="60"><B>Your_name</B><TD bgcolor="orange"  width="60"><B>E_mail</B><TD bgcolor="orange"  width="60"><B>Country</B><TD   bgcolor="orange" width="30"><B>phone_no</B><TD bgcolor="orange" width="20"><B>Your_comment</B></TR>';
while($myrow = mysql_fetch_array($result))
{
echo '<tr>';
echo '<td bgcolor="white" width="60">';
echo $myrow["user"];
echo '</td>';
echo '<td bgcolor="white" width="120">';
echo $myrow["email"];
echo '</td>';
echo '<td bgcolor="white" width="70">';
echo $myrow["country"];
echo '</td>';
echo '<td bgcolor="white"  width="60">';
echo $myrow["phone"];
echo "</td>";
echo '<td bgcolor="white" width="220">';
echo $myrow["comment"];
echo '</td>';

}
echo "</table>";
echo "</table>";


?>
</body>
</HTML>