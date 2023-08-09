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
 $query="select * from payroll" ;
 $result=mysql_query($query);
 $num_results=mysql_num_rows($result);
   
echo'<table width="1100" border="0" bgcolor="#CC9999">
<tr>
    <td width="202" height="280"><p align="left">&nbsp;</p></td>
    <td width="882"><table width="551" border="1" bordercolor="#CC66CC" bgcolor="#CC9999" >';
      if($num_results)
      
      
      echo'
          <tr>
           
            <td width="50"><div align="center" class="style9">FName</div></td>
            <td width="50"><div align="center"><span class="style9">Middlename</span></div></td>
            <td width="60"><div align="center" class="style11"><strong>Lastname</strong></div></td>
            <td width="111"><div align="center" class="style11"><strong>EmployeeID</strong></div></td>
            <td width="23"><div align="center" class="style11"><strong>Salary</strong></div></td>
            <td width="60"><div align="center" class="style11"><strong>Annual</strong></div></td>
            <td width="91"><div align="center" class="style11"><strong>Allowance</strong></div></td>
			<td width="68"><div align="center"><span class="style9">Eleveniz</span></div></td>
			<td width="1"><div align="center"><span class="style9">Housing</span></div></td>
			<td width="1"><div align="center"><span class="style9">Position</span></div></td>
			<td width="71"><div align="center" class="style11"><strong>Totalpay</strong></div></td>
            <td width="56"><div align="center"><span class="style9">Childschool</span></div></td>
            <td width="94"><div align="center"><span class="style9">Pension</span></div></td>
            <td width="1"><div align="center"><span class="style9">Incometax</span></div></td>
            <td width="1"><div align="center"><span class="style9">Netpay</span></div></td>
            
          </tr>';
      for($i=0;$i<=$num_results;$i++)
      {
      $row=mysql_fetch_array($result);
      echo'
      <tr>';
        echo'
          <td bgcolor="#CC9999">';
            echo $row['Fname'];
            echo'</td>
        ';
        echo'
        <td>';
          echo $row['Middlename'];
          echo'</td>
        ';
        echo'
		<td>';
          echo $row['Lastname'];
          echo'</td>
        ';
        echo'
        <td>';
          echo $row['EmployeID'];
          echo'</td>
        ';
        echo'
        <td>';
          echo $row['Salary'];
          echo'</td>
        ';
        echo'
        <td>';
          echo $row['Annual'];
          echo'</td>
        ';
        echo'
        <td>';
          echo $row['Allowance'];
          echo'</td>
        ';
        echo'
        <td>';
          echo $row['Eleveniz'];
          echo'</td>
        ';
        echo'
        <td>';
          echo $row['Housing'];
          echo'</td>
        ';
        echo'
        
        <td>';
          echo $row['position'];
          echo'</td>
        ';
        echo'
		<td>';
          echo $row['Totalpay'];
          echo'</td>
        ';
        echo'
		<td>';
          echo $row['Childschool'];
          echo'</td>
        ';
        echo'
		<td>';
          echo $row['Pension'];
          echo'</td>
        ';
        echo'
		<td>';
          echo $row['IncomeTaxe'];
          echo'</td>
        ';
        echo'
        
        <td>';
          echo $row['Netpay'];
          echo '</td>';
        echo'</tr>
      ';
      }
  
echo'</table>';


?>
</body>
</html>
