<html>
<body bgcolor="white">
<?php
 $EmployeID = $_POST['idsearch'];
 $EmployeID = trim($EmployeID);
 if(empty($EmployeID))
 {
	echo'Please enter search details.';
	exit;
 }
	$connect = mysql_connect('localhost','root','');
    if(!$connect)
	{
	  echo 'Error';
	  exit;
    }
 mysql_select_db('hufms',$connect);
 $query = "select * from payroll where EmployeID = '$EmployeID'";
 $result = mysql_query($query);
 $num_results = mysql_num_rows($result);
 if($num_results!=0){
 for($i=0;$i<$num_results;$i++)
 {
   $row = mysql_fetch_array($result);
   $Fname = $row["Fname"];
   $Middlename = $row["Middlename"];
   $Lastname = $row["Lastname"];
   $EmployeID = $row["EmployeID"];
   $Salary = $row["Salary"];
   $Allowance = $row["Allowance"];
                          //$fname = $row['Fname'];
						  //$mname = $row['Middlename'];
						  //$lname = $row['Lastname'];
						  //$empid = $row['EmployeID'];
						  //$salary = $row['Salary'];
						  //$allowance = $row['Allowance'];
						
 }
 ?>
   <form action="hufmsupdate.php" method="POST">
     <table border="0" width="20px" height="10px" align="center">
	    <tr>
		  <td>
		   Fname:
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
		    <input type="text" value="<?php echo $Middlename;?>" name="Middlename" size="38"/>
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
		    <input type="text" value="<?php echo $Salary;?>" name="Salary" size="38"/>
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
		 
		
		<table boder="0" width="10px" height="100px" align ="center">
	    <tr>
		  <td>
		  
		  
		    <input type="submit" value="Update"/>
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
 
 