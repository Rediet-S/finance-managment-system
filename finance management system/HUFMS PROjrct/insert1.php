<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Payroll System</title>
<style type="text/css">
<!--
body,td,th {
	color: #000000;
	font-size: 16px;
}
body {
	background-color: #CC9999;
}
.style2 {font-size: 18; font-weight: bold; }
.style4 {font-size: 18px; font-weight: bold; }
-->
</style></head>

<body>
   <?php     
	$con = mysql_connect('localhost','root','');
  if(!$con){
     echo "Can Not Connect:".mysql_error();
  }
else{

      mysql_select_db('hufms',$con);
	  $First_Name = array();  
	  $Middle_Name = array();
	  $Last_Name = array();
	  $Employee_ID = array();
	  $Salary = array();
	  $Annual = array();
	  $Allowance = array();
	  $Eleveniz = array();
	  $Housing = array();
	  $TotalPay = array();
	  $ChildSchool = array();
	  $Pension = array();
	  $Income_Tax = array();
	  $Netpay = array();
	  $Position = array();
	  $inserted = false;
	  $List = file('list.txt');
	  $number = count($List);
	  if($number == 0){
	    echo 'Their is no list';
	  }
	  else{
	  	    
	    for($row = 0;$row<$number;$row++){
		
		 $var = explode('\t',$List[$row]);
		 $col = count($var);
		 for($j = 0;$j<$col;$j++){
		    if($j == 1){
			 $First_Name[$row][$j] = $var[$j];
			}
		    if($j == 2){
		     $Middle_Name[$row][$j] = $var[$j];
		   }
		   if($j == 3){
		     $Last_Name[$row][$j] = $var[$j];
		   }
		   if($j == 4){
		     $Employee_ID[$row][$j] = $var[$j];
		   }
		   if($j == 5){
		     $Position[$row][$j] = $var[$j];
		   }
		  if($j == 6){
		     $Salary[$row][$j] = $var[$j];
		   }
		   if($j == 7){
		     $Allowance[$row][$j] = $var[$j];
		   }
		  if($j == 8){
		     $Housing[$row][$j] = $var[$j];
		   }
		   if($j == 9){
		     $ChildSchool[$row][$j] = $var[$j];
		   }
		   if($j == 10){
		     $Eleveniz[$row][$j] = $var[$j];
		   }
		   if($j == 11){
		     $Annual[$row][$j] = $var[$j];
		   }
		   
		}//end of inner loop
		 
		 //Calculating Eleveniz
		 /*
		 $Posit = (string)$Position[$row][5];
		 echo $Posit;
		 $head ="H";
		 if(strcasecmp($Posit,$head)==0){
		 
		    $Eleveniz[$row][10] = (float)$Salary[$row][6] * (float)0.1 * (float)0.917;
		    echo $Eleveniz[$row][10]."<br/>";
		 }*/
				
        //Calculating Totalpay
         $TotalPay[$row][12] = (float)$Salary[$row][6] +(float)$Annual[$row][11] + 
		                       (float)$Eleveniz[$row][10] + (float)$Allowance[$row][7] 
		    					+ (float)$Housing[$row][8];
		//Calsulating pension
		$Pension[$row][13] = (float)$Salary[$row][6] * (float)0.05;
		//Calsulating Netpay
			//Income Tax	
	    if(((float)$Salary[$row][6] > 0)&&((float)$Salary[$row][6]<= 150)){
            $Income_Tax[$row][14] = 0;
        }
       else if(((float)$Salary[$row][6] > 150)&&((float)$Salary[$row][6] <= 650)){
          $Income_Tax[$row][14] = (((float)$Salary[$row][6]*.1)-15);
	    }
      else if(((float)$Salary[$row][6] > 650)&&((float)$Salary[$row][6] <= 1400)){
         $Income_Tax[$row][14] = (((float)$Salary[$row][6]*.15)-47.5);
      }
      else if(((float)$Salary[$row][6] > 1400)&&((float)$Salary[$row][6] <= 2350)){
         $Income_Tax[$row][14] = (((float)$Salary[$row][6]*.2)-117.5);
	  }
      else if(((float)$Salary[$row][6] > 2350)&&((float)$Salary[$row][6] <= 3550)){
         $Income_Tax[$row][14] = (((float)$Salary[$row][6]*.25)-235);
	  }
      else if(((float)$Salary[$row][6] > 3550)&&((float)$Salary[$row][6] <= 5000)){
         $Income_Tax[$row][14] = (((float)$Salary[$row][6]*.3)-412.5);
	  }
      else if((float)$Salary[$row][6] > 5000){
        $Income_Tax[$row][14] = (((float)$Salary[$row][6]*.35)-662.5);
	  }	
	  $Netpay[$row][15] = (float)$TotalPay[$row][12] - ((float)$ChildSchool[$row][9] +
	                     (float)$Income_Tax[$row][14] + (float)$Pension[$row][13]);
		//inserting into database
	 $Emp_id = $Employee_ID[$row][4];
	 $Fname = $First_Name[$row][1];
	 $Mname = $Middle_Name[$row][2];
	 $Lname = $Last_Name[$row][3];
	 $Salry = $Salary[$row][6];
	 $annual = $Annual[$row][11];
	 $allowance = $Allowance[$row][7];
	 $eleveniz = $Eleveniz[$row][10];
	 $housing = $Housing[$row][8];
	 $totalpay = $TotalPay[$row][12];
	 $chldschl = $ChildSchool[$row][9];
	 $pension = $Pension[$row][13];
	 $incometax = $Income_Tax[$row][14];
	 $netpay = $Netpay[$row][15];
	 $Posit = $Position[$row][5];
	 $Select = "SELECT * FROM payroll WHERE EmployeID = '$Emp_id'";
	 $Result = mysql_query($Select);
	 $n = mysql_num_rows($Result);
	 if($n == 0){
	   $insert = "INSERT INTO payroll(Fname,Middlename,Lastname,EmployeID,Salary,Annual,
	              Allowance,Eleveniz,Housing,position,Totalpay,Childschool,Pension,IncomeTaxe,Netpay)
				  VALUES('$Fname','$Mname','$Lname','$Emp_id','$Salry','$annual','$allowance',
				 '$eleveniz','$housing','$Posit','$totalpay','$chldschl','$pension',
				 '$incometax','$netpay')";
	   if(mysql_query($insert)){
	      $inserted = true;   
	   }
	   else{
	      echo "Not inserted".mysql_error();
	   }
	}
	
   }//end of outer loops
   if($inserted == true){
   
	   echo "<h1>Insertion is Successful</h1>";
	}
	else{
	
	echo "<h1>Insertion is not Successful</h1>";
	}
  }//end of else
}//end of outer else  
?>
</body>
</html>
