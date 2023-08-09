<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
	  
	  $inserted = false;
	  $List = file('budget.txt');
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
			 $College = $var[$j];
			}
		    if($j == 2){
		     $Account_Code = $var[$j];
		   }
		   if($j == 3){
		     $Approved_Budget = $var[$j];
		   }
		   if($j == 4){
		     $Total_seplement = $var[$j];
		   }
		   if($j == 5){
		     $Total_Transfer_Add = $var[$j];
		   }
		  if($j == 6){
		     $Total_Transfer_Dedaction = $var[$j];
		   }
		   if($j == 7){
		     $Current_Monthly_Expenditure = $var[$j];
		   }
		  if($j == 8){
		     $Year_To_Date_Expenditure = $var[$j];
		   }
		   
		}//end of inner loop
	 $adjustedBudget = (float)$Approved_Budget + (float)$Total_seplement 
		             + (float)$Total_Transfer_Add - (float)$Total_Transfer_Dedaction;
	 $over_or_under_budget = (float)$adjustedBudget - (float)$Current_Monthly_Expenditure 
	                    - (float)$Year_To_Date_Expenditure;
	  $Select = "SELECT * FROM budget WHERE Account_Code = '$Account_Code'";
	 $Result = mysql_query($Select);
	 $n = mysql_num_rows($Result);
	 if($n == 0){
	   $insert = "INSERT INTO budget(College,Account_Code,Approved_Budget,Total_seplement,Total_Transfer_Add,Total_Transfer_Dedaction,
	              Current_Monthly_Expenditure,Year_To_Date_Expenditure,Adjusted_Budge,Over_or_under_budget)
				  VALUES('$College','$Account_Code','$Approved_Budget','$Total_seplement','$Total_Transfer_Add','$Total_Transfer_Dedaction','$Current_Monthly_Expenditure',
				 '$Year_To_Date_Expenditure','$adjustedBudget','$over_or_under_budget')";
	   if(mysql_query($insert)){
	      $inserted = true;   
	   }
	  
	}//end of if
	
   }//end of outer loops
   if($inserted == true){
   
	   echo "<h1>Insertion is Successful</h1>";
	}
	else{
	
	echo "<h1>Insertion is not Successful</h1>";
	}
	  }//end of outer loop
  }//end of inner else
//} //end of outer else 
?>
</body>
</html>
