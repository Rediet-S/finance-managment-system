<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Budget Update</title>
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

   
	<?php
$College = $_POST['College'];
$Account_Code = $_POST['Account_Code'];
$Approved_Budget = $_POST['Approved_Budget'];
$Total_seplement = $_POST['Tseplement'];
$Total_Transfer_Add = $_POST['Total_Transfer_Add'];
$Total_Transfer_Dedaction = $_POST['Total_Transfer_Dedaction'];
$Current_Monthly_Expenditure = $_POST['Current_Monthly_Expenditure'];
$Year_To_Date_Expenditure = $_POST['Year_To_Date_Expenditure'];

$username = 'root';
$password = '';
$hostname = 'localhost'; 
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password);
$selected = mysql_select_db("hufms",$dbhandle);
if($College!='' && $Account_Code!='' && $Approved_Budget!='' && $Total_seplement!='' && $Total_Transfer_Add!='' && $Total_Transfer_Dedaction!='' && $Current_Monthly_Expenditure!='' && $Year_To_Date_Expenditure!='' ){ 
       $update = "UPDATE budget SET College = '$College',Account_Code = '$Account_Code',
	              	Approved_Budget = '$Approved_Budget',Total_seplement = '$Total_seplement',Total_Transfer_Add = '$Total_Transfer_Add',
	             	Total_Transfer_Dedaction = '$Total_Transfer_Dedaction',Current_Monthly_Expenditure = '$Current_Monthly_Expenditure',Year_To_Date_Expenditure = $Year_To_Date_Expenditure WHERE Account_Code = '$Account_Code'";
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
