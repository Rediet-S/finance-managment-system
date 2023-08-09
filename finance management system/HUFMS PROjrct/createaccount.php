<html>
<body bgcolor="#CC9999">

<?php
if($_POST['password']==$_POST['cpassword']){
$con=mysql_connect("localhost","root","");
if(!$con){
die("error:".mysql_error());}
$db=mysql_select_db("hufms",$con);
if(!$db){
die("error:".mysql_error());}
?>
<?php
$var1=$_POST['accountname'];

$var2=$_POST['password'];
$var3=$_POST['cpassword'];

$query="INSERT INTO login(accountname,password,cpassword) values
('$var1','$var2','$var3')";
$r=mysql_query($query);
if(!$r){
$i=$r+1;
echo $var1. "<h2>
 
</h2>";
}
else{
$a=$r+1;
echo $var1.'<h2>
<i>
<b>  Account is created.</b>
</i>
</h2>';
 
}
}
mysql_close($con);
?>
 
 		 
</body>
</html>