<html>
<body bgcolor="white">
<?php
 $EmployeID = $_POST['EmployeID'];
 $EmployeID = trim($EmployeID);
 if(empty($EmployeID))
 {
	echo'Please enter search details.';
	exit;
 }
	@$db= mysql_pconnect('localhost','root','');
    if(!$db)
	{
	  echo 'Error';
	  exit;
    }
 mysql_select_db('hufms');
 $query = "select * from payroll where EmployeID = '$EmployeID'";
 $result = mysql_query($query);
 $num_results = mysql_num_rows($result);
 if($num_results!=0)
 {
 for($i=0;$i<$num_results;$i++)
 {
   $row = mysql_fetch_array($result);
   $Fname = $row['Firstname'];
   $Midddlename = $row['Middlename'];
   $Lastname= $row['Lastname'];
   $EmployeID = $row['EmployeID'];
   $Salary    = $row['Salary'];
   $Annual    = $row['Annual']; 
   $Allowance = $row['Allowance']; 
   $Eleveniz = $row['Eleveniz']; 
   $Housing = $row['Housing']; 
   $Position   = $row['Position']; 
 }
 ?>
 
   <form action="Deleted1.php" method="post">
     <table border="0" width="20px" height="10px" align="center">
	    <tr>
		  <td>
		    FirstName:
		  </td>
		  <td>
		    <input type="text" value="<?php echo $Fname;?>" name="Fname" size="38"/>
		  </td>
		</tr>
		<br/>
		<tr>
		  <td>
		    Middlename:
		  </td>
		  <td>
		    <input type="text" value="<?php echo $Midddlename;?>" name="Midddlename" size="38"/>
		  </td>
		</tr>
		<tr>
		  <td>
		   Lastname:
		  </td>
		  <td>
		  <input type="text" value="<?php echo $Lastname;?>" name="Lastname" size="38"/>
		  </td>
		</tr>
		<tr>
		  <td>
		   EmployeID:
		  </td>
		  <td>
		    <input type="text" value="<?php echo $EmployeID;?>" name="EmployeID" size="38"/>
		  </td>
		</tr>
		<tr>
		  <td>
		   Salary:
		  </td>
		  <td>
		    <input type="text" value="<?php echo  $Salary;?>" name="Salary" size="38"/>
		  </td>
		</tr>
		<tr>
		  <td>
		   Annual:
		  </td>
		  <td>
		   <input type="text" value="<?php echo $Annual;?>" name="Annual" size="38"/>
		   
		  </td>
		  </tr>
		  <tr>
		  <td>
		    Allowance:
		  </td>
		  <td>
		    <input type="text" value="<?php echo $Allowance;?>" name="Allowance" size="38"/>
		  </td>
		</tr>
		<tr>
		  <td>
		    Eleveniz:
		  </td>
		  <td>
		    <input type="text" value="<?php echo $Eleveniz;?>" name="Eleveniz" size="38"/>
		  </td>
		</tr>
		<tr>
		  <td>
		    Housing:
		  </td>
		  <td>
		    <input type="text" value="<?php echo $Housing;?>" name="Housing" size="38"/>
		  </td>
		</tr>
		<tr>
		  <td>
		    position:
		  </td>
		  <td>
		   <input type="text" value='<?php echo $Position;?>' name="Position" size="38">
		  </td>
		</tr>
		<table boder="0" width="10px" height="100px" align ="center">
	    <tr>
		  <td>
		  
		    <input type="submit" value="Delete"/>
		  </td>
        </tr>
       </table>		
     </table>	 
   </form>
  <?php
 }
  else{
    echo ' Search Entry Not Found in database';
  }
 ?>
 </body>
 </html>