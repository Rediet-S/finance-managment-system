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
.style2 {font-size: 18; font-weight: bold; }
.style4 {font-size: 18px; font-weight: bold; }
-->
</style></head>

<body>
<blockquote>
  
    <?php
    $College=$_POST['College'];
      $Account_Code=$_POST['Account_Code'];
      $Approved_Budget=$_POST['Approved_Budget'];
      $Total_seplement=$_POST['Total_seplement'];
      $Total_Transfer_Add=$_POST['Total_Transfer_Add'];
      $Total_Transfer_Dedaction=$_POST['Total_Transfer_Dedaction'];
      $Current_Monthly_Expenditure=$_POST['Current_Monthly_Expenditure'];
      $Year_To_Date_Expenditure=$_POST['Year_To_Date_Expenditure'];
      
      $Adjusted_Budget=$_POST['Approved_Budget']+$_POST['Total_seplement']+$_POST['Total_Transfer_Add']-$_POST['Total_Transfer_Dedaction'];
	  $Over_or_under_budget=$_POST['Adjusted_Budget']-$_POST['Current_Monthly_Expenditure']+$_POST['Year_To_Date_Expenditure'];
	  
     
      
      if(!$Account_Code)
      {
     echo' <img src="haramaya.jpg" width="1117" height="139" />
    <table width="1120" border="0">
  <tr bgcolor="#CC66CC" class="style2">
    <td width="96" height="35"><a href="home1.html" class="style4">Home</a></td>
    
    <td width="85"><a href="Search.html" class="style4">Search</a></td>
    <td width="93"><a href="Delete.html" class="style4">Delete</a></td>
    <td width="118"><a href="Update.html" class="style4">Update</a></td>
	 <td width="118"><a href="budget.html" class="style4">budget </a></td>
    
    <td width="228"><a href="Displaytablebudget.php" class="style4">budget report</a></td>
  </tr>
</table>
<table width="1119" border="0" bordercolor="#CC6699" bgcolor="#CC6699">
  <tr>
    <td width="236" bgcolor="#CC6699">&nbsp;</td>
    <td width="528" bgcolor="#CC6699"><table width="392" border="0">';
echo '<h1>Please Enter primary key correctly!! </h1>';
      exit;
      }
      $username = 'root';
      $password = '';
      $hostname = 'localhost'; 
      //connection to the database
      $dbhandle = mysql_connect($hostname, $username, $password);
      $selected = mysql_select_db("hufms",$dbhandle);
      $query="insert into budget values('".$College."','".$Account_Code."','".$Approved_Budget."','".$Total_seplement."','".$Total_Transfer_Add."','".$Total_Transfer_Dedaction."','".$Current_Monthly_Expenditure."','".$Year_To_Date_Expenditure."','".$Adjusted_Budget."','".$Over_or_under_budget."')";
      $result=mysql_query($query);
      if($result)
      {
      
      echo' <img src="haramaya.jpg" width="1117" height="139" />
    <table width="1120" border="0">
  <tr bgcolor="#CC66CC" class="style2">
    <td width="96" height="35"><a href="home1.html" class="style4">Home</a></td>
         <td width="62"><a href="Register1.html" class="style4">Insert</a></td>
    <td width="85"><a href="Search.html" class="style4">Search</a></td>
    <td width="93"><a href="Delete.html" class="style4">Delete</a></td>
    <td width="118"><a href="Update.html" class="style4">Update</a></td>
	 <td width="118"><a href="budget.html" class="style4">budget</a></td>

    <td width="228"><a href="Displaytable.php" class="style4">generete payroll</a></td>
	<td width="228"><a href="Displaytablebudget.php" class="style4">budget report</a></td>
	 
  </tr>
</table>
<table width="1119" border="0" bordercolor="#CC6699" bgcolor="#CC6699">
  <tr>
    <td width="236" bgcolor="#CC6699">&nbsp;</td>
    <td width="528" bgcolor="#CC6699"><table width="392" border="0">';
	echo'<b>The information inserted into the database is.</b>';
      echo'<tr>
        <td width="86">College </td>
        <td width="144">'.$College.'</td>
        
      </tr>
      <tr>
        <td height="33">&nbsp;</td>
        <td>Account_Code </td>
        <td>'.$Account_Code.'</td>
      </tr>
      <tr>
        <td height="31">&nbsp;</td>
        <td> Approved_Budget </td>
        <td>'.$Approved_Budget.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Total_seplement</td>
        <td>'.$Total_seplement.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Total_Transfer_Add </td>
        <td>'.$Total_Transfer_Add.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Total_Transfer_Dedaction</td>
        <td>'.$Total_Transfer_Dedaction.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Current_Monthly_Expenditure</td>
        <td>'.$Current_Monthly_Expenditure.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Year_To_Date_Expenditure</td>
        <td>'.$Year_To_Date_Expenditure.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Adjusted_Budget</td>
        <td>'.$Adjusted_Budget.'</td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td>Over_or_under_budget</td>
        <td>'.$Over_or_under_budget.'</td>
      </tr>
    </table>
    <p>&nbsp;</p></td>
    <td width="341" bgcolor="#CC6699">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;    </p>
';
}
else
{
 echo' <img src="haramaya.jpg" width="1117" height="139" />
    <table width="1120" border="0">
  <tr bgcolor="#CC66CC" class="style2">
    <td width="96" height="35"><a href="home1.html" class="style4">Home</a></td>
    
    <td width="85"><a href="Search.html" class="style4">Search</a></td>
    <td width="93"><a href="Delete.html" class="style4">Delete</a></td>
    <td width="118"><a href="Update.html" class="style4">Update</a></td>
     <td width="118"><a href="budget.html" class="style4">budget</a></td>
     <td width="228"><a href="Displaytable.php" class="style4">generete payroll</a></td>
    <td width="228"><a href="Displaytablebudget.php" class="style4">budget report</a></td>
  </tr>
</table>
<table width="1119" border="0" bordercolor="#CC6699" bgcolor="#CC6699">
  <tr>
    <td width="236" bgcolor="#CC6699">&nbsp;</td>
    <td width="528" bgcolor="#CC6699"><table width="392" border="0">';
echo '<h1>The record is not inserted into the database</h1>';
}

?>

</body>
</html>
