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
<blockquote>
  <blockquote>
    
       
        <form action="Deleted2.php" method="post">
		     <?php
		     $searchtype=$_POST['searchtype'];
			 $searchterm=$_POST['searchterm'];
			 $searchterm=trim($searchterm);
			 
			 if(empty($searchtype) || empty($searchterm))
			 {
			 echo'<form action="Delete2.php" method="post">
           
            <table width="1091" height="325" border="0" bgcolor="#CC66CC">
              <tr>
                <td width="531" height="321" bgcolor="#CC6666">
                  <table width="323" height="160" border="0">
                  <tr>
				  <b>Please enter searched value!!</b>
                    <td width="147" height="48"><strong>Delete value :</strong> </td>
                    <td width="166"><search name="searchvalue" size="1">
					 <input type="text" value="Account_Code" name="Account_Code" />;
                        
                                         </td>
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
				exit;
			 }
	
			 @ $db= mysql_pconnect('localhost','root','');
			 if(!$db)
			 {
				echo 'Error';
				exit;
			 }
			
            echo'</p>
		    
          <table width="1112" height="707" border="0" bgcolor="#CC6699">
              <tr>
                <td width="217" height="703" bgcolor="#CC6699"><p>&nbsp;</p>
                </td>';
               echo'<td width="885" bgcolor="#CC6699"><table width="410" border="0">
                  <tr>
                    <th width="375" scope="col"></th>
                  </tr>
                </table>
                  <table width="305" border="0">';
				  mysql_select_db('hufms');
                 $query="select* from budget where ".$searchtype." like '%".$searchterm."%'";
				  $result=mysql_query($query);
                   $num_results=mysql_num_rows($result);
				  if($num_results)
				  {
						for($i=0;$i<$num_results;$i++)
						{
					 $row=mysql_fetch_array($result);
					echo'<h1 align="left">Are you sure you want to delete this information?</h1>
					<h1></b></h1>
					';
                    echo'<tr>
                      <td width="170"><div align="left"><strong>College </strong></div></td>';
                     echo' <td width="125"><div align="left">';
                       echo' ';
                       echo $row['College'];
                       echo' </div></td> </tr>
                    <tr>
                      <td><div align="justify">Account_Code </div></td>';
                     echo'  <td><div align="justify">';
					echo $row['Account_Code'];
					echo' </div></td>
                    </tr>
                    <tr>
                      <td> <div align="justify">Approved_Budget </div></td>
                      <td><div align="justify">';
					 echo $row['Approved_Budget'];
					 echo'  </div></td>
                    </tr>
                    <tr>
                      <td><div align="justify">Total_seplement</div></td>
                      <td><div align="justify">';
					  echo $row['Total_seplement'];
					 echo'  </div></td>
                    </tr>
                    <tr>
                      <td><div align="justify">Total_Transfer_Add</div></td>
                      <td><div align="justify">';
					  echo $row['Total_Transfer_Add'];
					echo'   </div></td>
                    </tr>
					
                    <tr>
                      <td><div align="justify">Total_Transfer_Add</div></td>
                      <td><div align="justify">';
					  echo $row['Total_Transfer_Dedaction'];
					 echo'  </div></td>
                    </tr>
                    <tr>
                      <td><div align="justify">Current_Monthly_Expenditure</div></td>
                      <td><div align="justify">';
					  echo $row['Current_Monthly_Expenditure'];
					 echo'  </div></td>
                    </tr>
                    <tr>
                      <td><div align="justify">Year_To_Date_Expenditure</div></td>
                      <td><div align="justify">';
					  echo $row['Year_To_Date_Expenditure'];
					 echo'  </div></td>
                    </tr>
                    
                    <tr>
                      <td><div align="justify">Adjusted_Budge </div></td>
                      <td><div align="justify">';
					   echo $row['Adjusted_Budge'];
					 echo'  </div></td>
                    </tr>
					<tr>
                      <td><div align="justify">Over_or_under_budget</div></td>
                      <td><div align="justify">';
					  echo $row['Over_or_under_budget'];
					  echo' </div></td>
                    </tr>
					
                    <tr>
                      <td><div align="justify"></div></td>
                      <td><div align="justify"></div></td>
                    </tr>
                  </table>
                  ';
                 echo'<table width="304" border="0">
                    <tr>
					Are you sure? Enter the deleted item:
					<input name="searchterm" type="text" />
					<select name="searchtype" size="1">
                    <option value="EmployeID">EmployeID</option>
					
					<option> </option>
                  </select>
                      <th width="137" scope="col"><input name="yes" type="submit" value="yes" /></th>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
                  </td>
              </tr>
          </table>
</form>
          <p class="style1">&nbsp;  </p>';
		    exit;
		  }
		  }
		  else
{
echo'<h1>There is no related information!</h1>';
}
 ?>
		  
		 
         
</body>
</html>
