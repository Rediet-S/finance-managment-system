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

	  <?php
		
		 $searchterm = trim($_POST['searchdel']);
			//$searchtype=$_POST['searchtype'];
			 //$searchterm=trim($searchterm);
			 @$db= mysql_pconnect('localhost','root','');
			 if(!$db)
			 {
				echo 'Error';
				exit;
			 }
			 else
			 {
				 mysql_select_db('hufms');
				 $query=mysql_query("delete from login where password = $searchterm");
			 
                 //$result=mysql_query($query);
                if($query)
					{
					 echo '<h1 align="center">'.mysql_affected_rows().'record(s) Deleted</h1>';
					}
				 else
					{
					 echo 'No record deleted';
					}
			} 
		  ?>     

</body>
</html>
