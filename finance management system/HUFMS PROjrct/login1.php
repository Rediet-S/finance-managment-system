
<?php
   $accountname=$_POST['accountname'];
   $password=$_POST['password'];
   
if(strlen($accountname) && strlen($accountname))
{
 	$connect=mysql_connect("localhost","root","");
	mysql_select_db("hufms",$connect);
	
	$q=mysql_query("SELECT * FROM login WHERE accountname='".$accountname."' AND password='".$password."'"); 
	$aa=0;
	    while($row=mysql_fetch_array($q))
	{
		if($accountname==$row['accountname'] && $password==$row['password'])
		{
			?>
            <script type="text/javascript">
			 location.href = "hufms.html";
            </script>
            <?php
			//include("hom6.html");
			$aa=1;
		}		

	} 
	if($aa==0)
	echo'<script type="text/javascript"> alert("Please Reenter correct userName and Password again!"); location.href="FSHU.html"; </script>'; 
}

?>	
</body>
</html>
