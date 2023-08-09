<html>
<head></head>
<body bgcolor="white">
<?php
     $Fname = $_POST['Firstname'];
     $Midddlename = $_POST['Middlename'];
     $Lastname= $row['Lastname'];
     $EmployeID = $row['EmployeID'];
      $Salary    = $row['Salary'];
	 $Annual    = $row['Annual'];
	$Allowance = $row['Allowance'];
	 $Eleveniz = $row['Eleveniz']; 
	 $Housing = $row['Housing']; 
	 $Position   = $row['Position']; 
    if(!empty($Fname) && !empty($Midddlename) && !empty($Lastname) && !empty($EmployeID)  && !empty($Salary) && !empty($Annual) 
    && !empty($Allowance) && !empty($Eleveniz) && !empty( $Housing) && !empty($Position))
	{
	     $con = mysql_connect('localhost','root','');
	  if(!$con){
		 
		 echo 'Could not connect:'.mysql_error();   
		  
	  }
	  mysql_select_db("hufms",$con);
	  
	  $query = "Delete from payroll where EmployeID = '$EmployeID'"; 
	  if(mysql_query($query))
	  {
		   echo "Successfuly Deletion";
		   include('Displaytable.php');
		  
		  } 
	   else{
		  echo "Not Deleted".mysql_error();   
		   
		}
	}
	else{
		
	  echo "Please fill all information";
  }
?>
</body>
</html>