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
.style4 {color: #FF0000; font-weight: bold;}
-->
</style>
<script type="text/javascript">
function validate(){
 var testcodesearch =/^([a-z]|[A-Z]| )*$/;
 var testcodesearch2 = /^\d*[0-9](|.\d*[0-9]|,\d*[0-9])?$/;
 var College  = document.Updateform.College.value;
 var Account_Code  = document.Updateform.Account_Code.value;
 Account_Code = parseInt(Account_Code);
 var Approved_Budget  = document.Updateform.Approved_Budget.value;
 var Tseplement  = document.Updateform.Tseplement.value;
 var Total_Transfer_Add = document.Updateform.Total_Transfer_Add.value;
 var Total_Transfer_Dedaction  = document.Updateform.Total_Transfer_Dedaction.value;
 var Current_Monthly_Expenditure = document.Updateform.Current_Monthly_Expenditure.value;
 var Year_To_Date_Expenditure  = document.Updateform.Total_Transfer_Dedaction.value;
 
  if(College == ""){
    alert('Enter College');
	return false;
  }
  if(Account_Code == ""){
    alert('Enter account code');
	return false;
  }
  if(Approved_Budget == ""){
    alert('Enter Approved budget');
	return false;
  }
  if(Tseplement == ""){
    alert('Enter total seplement');
	return false;
  }
  if(Total_Transfer_Add == ""){
    alert('Enter total transfer add');
	return false;
  }
  if(Total_Transfer_Dedaction == ""){
    alert('enter total transfer dedaction');
	return false;
  }
   if(Current_Monthly_Expenditure == ""){
    alert('Enter current monthly expenditure');
	return false;
  }
  if(Year_To_Date_Expenditure == ""){
    alert('enter year to date expenditure');
	return false;
  }
  if(!testcodesearch.test(College)){
    alert('College must have to be an aplhabet');
	return false;
  }
  if(!testcodesearch.test(Account_Code)){
    alert('Account_Code must have to be an integer');
	return false;
  }
  if(!testcodesearch.test(Approved_Budget)){
    alert('Approved_Budget must have to be an integer');
	return false;
  }
  
  if(!testcodesearch2.test(Tseplement)){
    alert('Tseplement must have to be an integer');
	return false;
  }
  if(!testcodesearch2.test(Total_Transfer_Add)){
    alert('Total_Transfer_Add must have to be an integer');
	return false;
  }
  if(!testcodesearch2.test(Total_Transfer_Dedaction)){
    alert('Allowance must have to be an integer');
	return false;
  }
  if(!testcodesearch2.test(Current_Monthly_Expenditure)){
    alert('current montly expenditure must have to be an integer');
	return false;
  }
  if(!testcodesearch2.test(Year_To_Date_Expenditure)){
    alert('year to date expenditure must have to be an integer');
	return false;
  }
  if(testcodesearch.test(College))
  {
  	if(testcodesearch.test(Account_Code))
  	{
		if(testcodesearch.test(Approved_Budget))
  		{
			if(testcodesearch2.test(Tseplement))
  			{
				
				if(testcodesearch2.test(Total_Transfer_Add))
				{						
					if(testcodesearch2.test(Total_Transfer_Dedaction))
					{
					  if(testcodesearch2.test(Current_Monthly_Expenditure))
				      {						
					   if(testcodesearch2.test(Year_To_Date_Expenditure))
					   {
						return true;
					}
				}
			}
		}
	}
  
  }
  
}
</script>
</head>

<body>

    
		     <?php 
			 //$searchtype=$_POST['searchtype'];
			
			 if(isset($_POST['Search']))
			 { 
				  @ $db = mysql_pconnect('localhost','root','');
			       
				   if(!$db){
				     echo 'Error';
				     exit;
			       }
				  else if($db)
				  {
				  	$searchterm=$_POST['codesearch'];
					$searchterm=trim($searchterm);
					$College = '';
					$Account_Code = '';
					$Approved_Budget = '';
					$Tseplement = '';
					$Total_Transfer_Add = '';
					$Total_Transfer_Dedaction= '';
					$Current_Monthly_Expenditure = '';
					$Year_To_Date_Expenditure = '';
					
					echo'<td width="775" valign="top" bgcolor="#CC6699">
					  <table width="305" border="1" bordercolor="#CC6699" bgcolor="#CC6699">';
					  mysql_select_db('hufms');
					  $query = "select * from budget where Account_Code like '%".$searchterm."%'";
					  $result = mysql_query($query);
					  $num_results = mysql_num_rows($result);
					
					  if($num_results!=0)
					  {
					      while($row = mysql_fetch_assoc($result))
						  {
							  $College = $row['College'];
							  $Account_Code = $row['Account_Code'];
							  $Approved_Budget = $row['Approved_Budget'];
							  $Tseplement = $row['Total_seplement'];
							  $Total_Transfer_Add = $row['Total_Transfer_Add'];
							  $Total_Transfer_Dedaction= $row['Total_Transfer_Dedaction'];
							  $Current_Monthly_Expenditure = $row['Current_Monthly_Expenditure'];
							  $Year_To_Date_Expenditure = $row['Year_To_Date_Expenditure'];
							}
					    ?>
				<body bgcolor="#CC9999" text="blue">


<legend><h2><u>Search Payroll Information</U></h2></legend>
						 <form name='Updateform' action = "Updated2.php" method="POST" onsubmit="return validate();">
						<!--<form action = "Updated2.php" method="POST">-->
						 <table border="0" width="10px" height="30px" align="center">
						  <tr>
						    <td>
							  College:
							</td>
							<td>
							  <input type='text' value='<?php echo $College;?>' name='College' />
							</td>
						  </tr>
						  <tr>
						    <td>
							  Account_Code:
							</td>
							<td>
							  <input type='text' value="<?php echo $Account_Code;?>" name='Account_Code' />
							</td>
						  </tr>
						  <tr>
						    <td>
							 Approved_Budget:
							</td>
							<td>
					 <input type='text' value="<?php echo $Approved_Budget;?>" name='Approved_Budget' />
							</td>
						  </tr>
						  <tr>
						    <td>
		                     Total_seplement:
							</td>
							<td>
		                <input type='text' value="<?php echo $Tseplement;?>" name='Tseplement' />
							</td>
						  </tr>
						  <tr>
						    <td>
							Total_Transfer_Add:
							</td>
							<td>
				<input type='text' value="<?php echo $Total_Transfer_Add;?>" name='Total_Transfer_Add' />
							</td>
						  </tr>
						  <tr>
						    <td>
							Total_Transfer_Dedaction:
							</td>
							<td>
	        <input type='text' value="<?php echo $Total_Transfer_Dedaction;?>" name='Total_Transfer_Dedaction' />
							</td>
						  </tr>
						   <tr>
						    <td>
							Current_Monthly_Expenditure:
							</td>
							<td>
                      <input type='text' value="<?php echo $Current_Monthly_Expenditure;?>" name='Current_Monthly_Expenditure' />
							</td>
						  </tr>
						  <tr>
						    <td>
						Year_To_Date_Expenditure:
							</td>
							<td>
							  <input type='text' value="<?php echo  $Year_To_Date_Expenditure;?>" name='Year_To_Date_Expenditure' />
							</td>
						  </tr>
						  <!--
						  <tr>
						    <td>
						Housing:
							</td>
							<td>
							  <input type='text' value="" name='housing' />
							</td>
						  </tr>
						  -->
						  <tr>
						    <td>
							</td>
						    <td>
							  <input type='submit' value="Update" name="Update"/>
							</td>
						  </tr>
						</table>
					  </form>
						<?php
			}
	       else
                 echo'<h1> There is no related information!';
  		 }
		}
/*else{
  echo "please fill information";
} 	*/	  
?>  
</fieldset>		  
</body>
</html>
