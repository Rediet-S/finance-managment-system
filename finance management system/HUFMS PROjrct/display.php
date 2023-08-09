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
 $query="select * from login" ;
 $result=mysql_query($query);
 $num_results=mysql_num_rows($result);
   
echo'<table width="1100" border="0" bgcolor="#CC9999">
<tr>
    <td width="202" height="280"><p align="left">&nbsp;</p></td>
    <td width="882"><table width="551" border="1" bordercolor="#CC66CC" bgcolor="#CC9999" >';
      if($num_results)
      
      
      echo'
          <tr>
           
            <td width="50"><div align="center" class="style9">Account_name</div></td>
            <td width="50"><div align="center"><span class="style9">Password</span></div></td>
            <td width="60"><div align="center" class="style11"><strong>Confirm password</strong></div></td>
            
            
          </tr>';
      for($i=0;$i<=$num_results;$i++)
      {
      $row=mysql_fetch_array($result);
      echo'
      <tr>';
        echo'
          <td bgcolor="#CC9999">';
            echo $row['accountname'];
            echo'</td>
        ';
        echo'
        <td>';
          echo $row['password'];
          echo'</td>
        ';
        echo'
		<td>';

          echo $row['cpassword'];
          echo '</td>';
        echo'</tr>
      ';
      }
  
echo'</table>';


?>
</body>
</html>
