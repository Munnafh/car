<html>
<head>
	
	
	<style>
body {
    background-color: lightblue;
}
</head>
</style>
<body>
<center>
<table>	
			
<?php

//$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');
$con=mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
	echo 'Not Connect to the Server';
}

 if(!@mysqli_select_db($con,'ToDo'))
 {

	 echo 'DataBase Not Connected';
 }
 

 $Note=$_POST['Note'];
 
 $Date=$_POST['Date'];
 
 
 
 
$sql="INSERT INTO 	Job(Note,Date) VALUES ('$Note','$Date')";
 
 if(!@mysqli_query($con,$sql))
	 
	 {
	 
		 echo 'Not Inserted';
	 }
else
	 {
	
	
	 echo "<h1> Thank You for Interested.We Will Contact You Very Soon..</h1>";
	 
	 
	 
 }
	 }

 


?>


</body>
</html>