<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	color: #000000;
	font-size: 16px;
}
body {
	background-color: #CC9999;
}
.style8 {font-size: 36px}
-->
</style></head>

<body>
<blockquote>
  <blockquote>
   
	<?php
$Fname = $_POST['fname'];
$Middlename = $_POST['mname'];
$Lastname = $_POST['lname'];
$EmployeID = $_POST['empid'];
$Salary = $_POST['salary'];

$Allowance = $_POST['allowance'];

$username = 'root';
$password = '';
$hostname = 'localhost'; 
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password);
$selected = mysql_select_db("hufms",$dbhandle);
if($Fname!='' && $Middlename!='' && $Lastname!='' && $EmployeID!='' && $Salary!=''){ 
       $update = "UPDATE payroll SET Fname = '$Fname',Middlename = '$Middlename',
	              Lastname = '$Lastname',Salary = '$Salary',
	             Allowance = '$Allowance' WHERE EmployeID = '$EmployeID'";
        $result	= mysql_query($update);
      if($result){
	   echo "Updation is successful".mysql_error();
         
    }
  else{
    echo "Updation is not successful".mysql_error();
 }
}
else{
  echo "please fill all information";
}
				 
?>

</body>
</html>
