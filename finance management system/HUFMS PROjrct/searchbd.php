<html>
<body bgcolor="#CC9999">
<?php

 $Account_Codesearch = $_POST['codesearch'];
 //$EmployeID = trim($EmployeID);
 if(empty($Account_Codesearch))
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
		$query = mysql_query("SELECT * FROM  budget where Account_Code = $Account_Codesearch");
		//$result = $query);
		$num_results = mysql_num_rows($query);
		 
		 if($num_results != 0)
		 {
		  echo '<p> searched value: '.$num_results.'</p>';
		  
		  
			 while($row = mysql_fetch_array($query))
			 {
				 echo '<p><strong>College : ';
				 echo $row['College'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;Account_Code: ';
				 echo $row['Account_Code'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;Approved_Budget: ';
				 echo $row['Approved_Budget'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;Total_seplement: ';
				 echo $row['Total_seplement'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;Total_Transfer_Add: ';
				 echo $row['Total_Transfer_Add'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;Total_Transfer_Dedaction: ';
				 echo $row['Total_Transfer_Dedaction'];
				 echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Current_Monthly_Expenditure ';
				 echo $row['Current_Monthly_Expenditure'];
				 echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Year_To_Date_Expenditure: ';
				 echo $row['Year_To_Date_Expenditure'];
				 echo '</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;Adjusted_Budge: ';
				 echo $row['Adjusted_Budge'];
				 echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Over_or_under_budget: ';
				 echo $row['Over_or_under_budget'];
				
				 echo '<p>';
			}
		}
		else{
			echo 'Account_Code Not Found in Database';
		}
	}
	}

 ?>
 </body>
 </html>