<!DOCTYPE html>
<html>
<head>




<?php
$msg="";

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


$CarName=$_POST['CarName'];
 
 $CarDetails=$_POST['CarDetails'];
 
 $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
 
 
 
 $sql="INSERT INTO addcar(CarName,CarDetails,Pic) VALUES ('$CarName','$CarDetails','$file')";
 
mysqli_query($con,$sql);
	 
	
	
header("refresh:30 url=Addcar.html");
 


?>
	

</body>
</html>