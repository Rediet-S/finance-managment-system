<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	color: #000000;
	font-weight: bold;
}
body {
	background-color: #CC9999;
}
.style3 {color: #ff0000; font-weight: bold; }
.style6 {color: #000033}
.style9 {color: #000066; font-weight: bold; }
.style11 {color: #000066}
.style15 {font-size: 18px; font-weight: bold; }
.style19 {font-size: 18px}
-->
</style></head>

<body>
<?php
@ $db= mysql_pconnect('localhost','root','');
 if(!$db)
 {
	echo 'Error';
	exit;
 }
 mysql_select_db('hufms');
 $query="select * from budget" ;
 $result=mysql_query($query);
 $num_results=mysql_num_rows($result);
   
echo'<table width="800" border="0" bgcolor="#CC9999">
<tr>
    <td width="302" height="280"><p align="left">&nbsp;</p></td>
    <td width="482"><table width="551" border="1" bordercolor="#CC66CC" bgcolor="#CC9999" >';
      if($num_results)
      
      
      echo'
          <tr>
            <td width="30"><div align="center" class="style9">College</div></td>
            <td width="30"><div align="center" class="style9">Account_Code</div></td>
            <td width="30"><div align="center"><span class="style9">Aproved_Budget</span></div></td>
            <td width="60"><div align="center" class="style11"><strong>Total_Seplement</strong></div></td>
            <td width="61"><div align="center" class="style11"><strong>Total_Transfer_Add</strong></div></td>
            <td width="23"><div align="center" class="style11"><strong>Total_Transfer_Deduction</strong></div></td>
            <td width="60"><div align="center" class="style11"><strong>Current_Monthly_Expenditure</strong></div></td>
            <td width="51"><div align="center" class="style11"><strong>Year_To_Date_Expenditure</strong></div></td>
			<td width="48"><div align="center"><span class="style9">Adjusted_Budget</span></div></td>
			<td width="1"><div align="center"><span class="style9">Over_or_Under_Budget</span></div></td>
			
          </tr>';
      for($i=0;$i<=$num_results;$i++)
      {
      $row=mysql_fetch_array($result);
      echo'
      <tr>';
        echo'
          <td bgcolor="#CC9999">';
		  echo $row['College'];
            echo'</td>
			';
			echo'
			<td>';
            echo $row['Account_Code'];
            echo'</td>
        ';
        echo'
        <td>';
          echo $row['Approved_Budget'];
          echo'</td>
        ';
        echo'
		<td>';
          echo $row['Total_seplement'];
          echo'</td>
        ';
        echo'
        <td>';
          echo $row['Total_Transfer_Add'];
          echo'</td>
        ';
        echo'
        <td>';
          echo $row['Total_Transfer_Dedaction'];
          echo'</td>
        ';
        echo'
        <td>';
          echo $row['Current_Monthly_Expenditure'];
          echo'</td>
        ';
        echo'
        <td>';
          echo $row['Year_To_Date_Expenditure'];
          echo'</td>
        ';
        echo'
        <td>';
          echo $row['Adjusted_Budge'];
          echo'</td>
        ';
        echo'
        <td>';
          echo $row['Over_or_under_budget'];
          echo'</td>
        ';
      }
  
echo'</table>';


?>
</body>
</html>
