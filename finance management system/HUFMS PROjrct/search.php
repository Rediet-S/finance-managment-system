<html>
<body bgcolor="#CC9999">
<?php
 $EmployeIDsearch = $_POST['idsearch'];
 //$EmployeID = trim($EmployeID);
 if(empty($EmployeIDsearch))
 {
	echo'Please enter search details.';
	exit;
 }
 else
 {
	@$db= mysql_pconnect('localhost','root','');
    if(!$db)
	{
	  echo 'Error';
	  exit;
    }
	else
	{
		mysql_select_db('hufms');
		$query = mysql_query("SELECT * FROM  payroll where EmployeID = $EmployeIDsearch");
		//$result = $query);
		$num_results = mysql_num_rows($query);
		 
		 if($num_results != 0)
		 {
		  echo '<p> searched value: '.$num_results.'</p>';
		  
			 while($row = mysql_fetch_array($query))
			 {
				 echo '<p><strong>FName: ';
				 echo $row['Fname'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;MiddleName: ';
				 echo $row['Middlename'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;LastName: ';
				 echo $row['Lastname'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;EmployeeID: ';
				 echo $row['EmployeID'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;Salarly: ';
				 echo $row['Salary'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;Annual: ';
				 echo $row['Annual'];
				 echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Allonce: ';
				 echo $row['Allowance'];
				 echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Eleveniz: ';
				 echo $row['Eleveniz'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;Housing: ';
				 echo $row['Housing'];
				 echo '<br />&nbsp;&nbsp;&nbsp;&nbsp; Position: ';
				 echo $row['position'];
				 echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Totalpay: ';
				 echo $row['Totalpay'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;Childschool: ';
				 echo $row['Childschool'];
				 echo '<br />&nbsp;&nbsp;&nbsp;&nbsp; Pension: ';
				 echo $row['Pension'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;IncomeTaxe: ';
				 echo $row['IncomeTaxe'];
				 echo '<br />&nbsp;&nbsp;&nbsp;&nbsp; Netpay: ';
				 echo $row['Netpay'];
				 echo '<p>';
			}
		}
		else{
			echo ' EmployeID Not Found in Database';
		}
	}
}
 ?>
 </body>
 </html>