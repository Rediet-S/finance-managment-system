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
 var fname  = document.Updateform.fname.value;
 var mname  = document.Updateform.mname.value;
 var lname  = document.Updateform.lname.value;
 var empid2  = document.Updateform.empid2.value;
 empid2 = parseInt(empid2);
 var salary = document.Updateform.salary.value;
 var allowance  = document.Updateform.allowance.value;
 
  if(fname == ""){
    alert('Enter first name');
	return false;
  }
  if(mname == ""){
    alert('Enter middle name');
	return false;
  }
  if(lname == ""){
    alert('Enter last name');
	return false;
  }
  if(empid2 == ""){
    alert('Enter employeID');
	return false;
  }
  if(salary == ""){
    alert('Enter salary');
	return false;
  }
  if(allowance == ""){
    alert('allowance');
	return false;
  }
  if(!testcodesearch.test(fname)){
    alert('first name must have to be an aplhabet');
	return false;
  }
  if(!testcodesearch.test(mname)){
    alert('middle name must have to be an aplhabet');
	return false;
  }
  if(!testcodesearch.test(lname)){
    alert('last name must have to be an aplhabet');
	return false;
  }
  
  if(!testcodesearch2.test(empid2)){
    alert('EmployeID must have to be an integer');
	return false;
  }
  if(!testcodesearch2.test(salary)){
    alert('Salary must have to be an integer');
	return false;
  }
  if(!testcodesearch2.test(allowance)){
    alert('Allowance must have to be an integer');
	return false;
  }
  
  if(testcodesearch.test(fname))
  {
  	if(testcodesearch.test(mname))
  	{
		if(testcodesearch.test(lname))
  		{
			if(testcodesearch2.test(empid2))
  			{
				
				if(testcodesearch2.test(salary))
				{						
					if(testcodesearch2.test(allowance))
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
<blockquote>
  <blockquote>
    
		     <?php 
		    	
			
			 //$searchtype=$_POST['searchtype'];
			 $searchterm=$_POST['searchterm'];
			 $searchterm=trim($searchterm);
			 if(!empty($searchterm))
			 { 
			 
            
               echo'<td width="775" valign="top" bgcolor="#CC6699">
                  <table width="305" border="1" bordercolor="#CC6699" bgcolor="#CC6699">';
				  @ $db = mysql_pconnect('localhost','root','');
			       if(!$db){
				     echo 'Error';
				     exit;
			       }
				  mysql_select_db('hufms');
                  $query = "select * from payroll where EmployeID like '%".$searchterm."%'";
				  $result = mysql_query($query);
                  $num_results = mysql_num_rows($result);
				
				  if($num_results!=0)
				  {
					  
						for($i=0;$i<$num_results;$i++){
					      $row = mysql_fetch_array($result);
                          $fname = $row['Fname'];
						  $lname = $row['Lastname'];
						  $mname = $row['Middlename'];
						  $empid = $row['EmployeID'];
						  $salary = $row['Salary'];
						  //$annual = $row['Annual'];
						  $allowance = $row['Allowance'];
						 // $eleveniz = $row['Eleveniz'];
						 // $housing = $row['Housing'];
						
						} 
					    ?>
							<body bgcolor="#CC9999" text="blue">
<legend><h2><u>UpDate Payroll Information</U></h2></legend>
		    <form name='Updateform' action = "Updated.php" method="POST" onsubmit="return validate();">
						 <table border="0" width="10px" height="30px" align="center">
						  <tr>
						    <td>
							  FirstName:
							</td>
							<td>
							  <input type='text' value='<?php echo $fname;?>' name='fname' />
							</td>
						  </tr>
						  <tr>
						    <td>
							  MiddleName:
							</td>
							<td>
							  <input type='text' value="<?php echo $mname;?>" name='mname' />
							</td>
						  </tr>
						  <tr>
						    <td>
							  LastName:
							</td>
							<td>
							  <input type='text' value="<?php echo $lname;?>" name='lname' />
							</td>
						  </tr>
						  <tr>
						    <td>
		                     EmployeeID:
							</td>
							<td>
							  <input type='text' value="<?php echo $empid;?>" name='empid2' />
							</td>
						  </tr>
						  <tr>
						    <td>
							Salary:
							</td>
							<td>
							  <input type='text' value="<?php echo $salary;?>" name='salary' />
							</td>
						  </tr>
						  <!--<tr>
						    <td>
							Annual:
							</td>
							<td>
							  <input type='text' value="<?php echo $annual;?>" name='annual' />
							</td>
						  </tr>--->
						   <tr>
						    <td>
							Allowance:
							</td>
							<td>
							  <input type='text' value="<?php echo $allowance;?>" name='allowance' />
							</td>
						  </tr>
						  <!---<tr>
						    <td>
						Eleveniz:
							</td>
							<td>
							  <input type='text' value="<?php echo $eleveniz;?>" name='eleveniz' />
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
							  <input type='submit' value="Update" />
							</td>
						  </tr>
						</table>
					  </form>
						<?php
			    }
	       else{
                 echo'<h1> There is no related information!';
            }
   }
else{
  echo "please fill information";
} 		  
?>  
	</form>
	 
</body>
</html>
