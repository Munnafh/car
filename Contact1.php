<!DOCTYPE html>
<html>
<head>




<?php


//$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

$con=mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
	echo 'Not Connect to the Server';
}


if(!mysqli_select_db($con,'jctechnology'))
{

	 echo 'DataBase Not Connected';
 }

$Name=$_POST['Name'];
 
 $Email=$_POST['Email'];
 
$Commend=$_POST['Commend'];
 
 
 
 $sql="INSERT INTO contact(Name,Email,Commend) VALUES ('$Name','$Email','$Commend')";
 
if(!mysqli_query($con,$sql))
	 
	 {
		 echo 'Not Inserted';
	 }
	 else
		  {
		 echo'<h3>Thank You For Contact Us. We Will Back To You Soon...</h3>';
	 }
	 
header("refresh:3 url=index.html");
 


?>
	

</body>
</html>