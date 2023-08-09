<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>payroll system</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
body {
	background-color: #CC9999;
}
.style3 {
	font-weight: bold;
	color: #FF0000;
	font-size: 24px;
}
-->
</style>
</head>
<body>

        <form action="deletedaccount.php" method="post">
		     <?php
			 $searchterm=$_POST['searchterm'];
			 $searchterm=trim($searchterm);
			 
			 	echo '<input type="hidden" value="'.$searchterm.'" name="searchdel"/>';
			 if(empty($searchterm))
			 {
			 	
			 	echo '<script type="text/javascript">alert("please fill id first");</script>';
			 
			 }
			else if(!empty($searchterm))
			{
				 @ $db= mysql_pconnect('localhost','root','');
				 if(!$db)
				 {
					echo 'Error';
					exit;
				 }
			else if($db)
			{
				echo'</p>
				<table width="1113" border="0" bgcolor="#CC6699">
				  <tr bgcolor="#CC66CC"></tr></table>
          		<table width="1112" height="707" border="0" bgcolor="#CC6699">
              <tr>
                <td width="217" height="703" bgcolor="#CC6699"><p>&nbsp;</p>
                </td>';
               echo'<td width="885" bgcolor="#CC6699"><table width="410" border="0">
                  <tr>
                    <th width="375" scope="col"></th>
                  </tr>
                </table>
                  <table width="305" border="0">';
				  mysql_select_db('hufms');
                 $query="select * from login where password like '%".$searchterm."%'";
				  $result=mysql_query($query);
                  $num_results=mysql_num_rows($result);
				  if($num_results != 0)
				  {
						for($i=0;$i<$num_results;$i++)
						{
					 $row=mysql_fetch_array($result);
					echo'<h1 align="left">Are you sure you want to delete this information?</h1>
					<h1></b></h1>
					';
                    echo'<tr>
                      <td width="170"><div align="left"><strong>Account name</strong></div></td>';
                     echo' <td width="125"><div align="left">';
                       echo' ';
                       echo $row['accountname'];
                       echo' </div></td> </tr>
                    <tr>
                      <td><div align="justify">Password </div></td>';
                     echo'  <td><div align="justify">';
					echo $row['password'];
					echo' </div></td>
                    </tr>
                    <tr>
                      <td><div align="justify">Confirm password </div></td>
                      <td><div align="justify">';
					  echo $row['cpassword'];
					 echo'  </div></td>
                    </tr>
                    <tr>
                      <td><div align="justify"></div></td>
                      <td><div align="justify"></div></td>
                    </tr>
                  </table>
                  ';
				  }
				 
                  echo'<table width="304" border="0">
                    <tr>
					Are you sure? 
                      <th width="137" scope="col"><input name="yes" type="submit" value="yes" /></th>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
                  </td>
              </tr>
          </table>
		  
			</form>
          <p class="style1">&nbsp;  </p>';
		}
		 if($num_results == 0)
		echo'<h1>There is no related information!</h1>';
	}
		
	}

 ?>
		  
		 
         
</body>
</html>
 