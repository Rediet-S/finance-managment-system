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

        <form action="Deleted.php" method="post">
		     <?php
			 $searchterm=$_POST['searchterm'];
			 $searchterm=trim($searchterm);
			 
			 	echo '<input type="hidden" value="'.$searchterm.'" name="searchdel"/>';
			 if(empty($searchterm))
			 {
			 	
			 	echo '<script type="text/javascript">alert("please fill id first");</script>';
			 /*echo'<form action="Deleted.php" method="post">
           
            </table>
            <table width="1091" height="325" border="0" bgcolor="#CC66CC">
              <tr>
                <td width="531" height="321" bgcolor="#CC6666">
                  <table width="323" height="160" border="0">
                  <tr>
				  <b>Please enter searched value!!</b>
                  </tr>
                  <tr>
                    <td height="51"><strong>Enter delete value: </strong></td>
                    <td><input name="searchterm" type="text" size="19" maxlength="30" />                    </td>
                  </tr>
                  <tr>
                    <td height="53">&nbsp;</td>
                    <td><input name="Submit" type="submit" class="style1" value="Delete" />                    </td>
                  </tr>
                </table>
                <p>&nbsp;</p></td>
              </tr>
            </table>
          </form>
                <table width="1091" border="0" bgcolor="#CC66CC">
                  <tr>
                    <td width="177" height="126" bgcolor="#CC66CC">&nbsp;</td>
                    <td width="282" bgcolor="#CC66CC">&nbsp;</td>
                    <td width="618" bgcolor="#CC66CC">&nbsp;</td>
                  </tr>
               </table>';
				exit;*/
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
				  <tr bgcolor="#CC9999"></tr></table>
          		<table width="1112" height="707" border="0" bgcolor="#CC9999">
              <tr>
                <td width="217" height="703" bgcolor="#CC9999"><p>&nbsp;</p>
                </td>';
               echo'<td width="885" bgcolor="#CC9999"><table width="410" border="0">
                  <tr>
                    <th width="375" scope="col"></th>
                  </tr>
                </table>
                  <table width="305" border="0">';
				  mysql_select_db('hufms');
                 $query="select * from payroll where EmployeID like '%".$searchterm."%'";
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
                      <td width="170"><div align="left"><strong>Fname </strong></div></td>';
                     echo' <td width="125"><div align="left">';
                       echo' ';
                       echo $row['Fname'];
                       echo' </div></td> </tr>
                    <tr>
                      <td><div align="justify">Middlename </div></td>';
                     echo'  <td><div align="justify">';
					echo $row['Middlename'];
					echo' </div></td>
                    </tr>
                    <tr>
                      <td> <div align="justify">Lastname </div></td>
                      <td><div align="justify">';
					 echo $row['Lastname'];
					 echo'  </div></td>
                    </tr>
                    <tr>
                      <td><div align="justify">EmployeID</div></td>
                      <td><div align="justify">';
					  echo $row['EmployeID'];
					 echo'  </div></td>
                    </tr>
                    <tr>
                      <td><div align="justify">Salary</div></td>
                      <td><div align="justify">';
					  echo $row['Salary'];
					echo'   </div></td>
                    </tr>
					
                    <tr>
                      <td><div align="justify">Annual</div></td>
                      <td><div align="justify">';
					  echo $row['Annual'];
					 echo'  </div></td>
                    </tr>
                    <tr>
                      <td><div align="justify">Allowance</div></td>
                      <td><div align="justify">';
					  echo $row['Allowance'];
					 echo'  </div></td>
                    </tr>
                    <tr>
                      <td><div align="justify">Eleveniz</div></td>
                      <td><div align="justify">';
					  echo $row['Eleveniz'];
					 echo'  </div></td>
                    </tr>
                    
                    <tr>
                      <td><div align="justify">Housing </div></td>
                      <td><div align="justify">';
					   echo $row['Housing'];
					 echo'  </div></td>
                    </tr>
					<tr>
                      <td><div align="justify">position</div></td>
                      <td><div align="justify">';
					  echo $row['position'];
					  echo' </div></td>
                    </tr>
					<tr>
                      <td><div align="justify">Totalpay </div></td>
                      <td><div align="justify">';
					  echo $row['Totalpay'];
					  echo' </div></td>
                    </tr>
					<tr>
                      <td><div align="justify">Childschool </div></td>
                      <td><div align="justify">';
					  echo $row['Childschool'];
					  echo' </div></td>
                    </tr>
					<tr>
                      <td><div align="justify">Pension</div></td>
                      <td><div align="justify">';
					   echo $row['Pension'];
					  echo' </div></td>
                    </tr>
                    
                    <tr>
                      <td><div align="justify">Netpay </div></td>
                      <td><div align="justify">';
					  echo $row['Netpay'];
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
 