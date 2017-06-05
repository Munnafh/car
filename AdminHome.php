<!DOCTYPE html>
<html>
<head>
 <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Destiny Wheels</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
		<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
 <link rel="stylesheet" type="text/css" href="css/pop.css" />

</head>
<body>

<div class="container">
		<div class="row">
							<div class="col-lg-6">
							
							
							<h2>Admin Section!! Only For Admin Uses</h2>

<br><br>
<a class="btn btn-theme btn-lg" href="http://localhost:8080/dw/Addcar.html">Add Car</a>
<br><br>
								<h2>Car Lists Table :-</h2>
								<br>



<table class='table table-hover'>
  <tr>
	   <th align="middle"><h4>Id</h4></th>
    <th align="middle"><h4>CarName</h4></th>
    <th align="middle"><h4>Details</h4></th>
      <th align="middle"><h4>Pic</h4></th>
	  	  
  </tr>
 <?php

session_start();
if(isset($_SESSION['userName1']))
{


//$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

$con=mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
	echo 'Not Connect to the Server';
}

 if(!@mysqli_select_db($con,'jctechnology'))
 {

	 echo 'DataBase Not Connected';
 }
 
 $sql="SELECT * FROM `servicereq`";
 
 $records=mysqli_query($con,$sql);
 
 while($row = mysqli_fetch_array($records))
 {
	 echo "<tr>";
	 echo "<td>".$row['Id']."</td>";
	 echo "<td>".$row['Name']."</td>";
	 echo "<td>".$row['Phone']."</td>"; 
	 echo "<td>".$row['Email']."</td>";
	 echo "<td>".$row['Warranty']."</td>";
	 echo "<td>".$row['Problem']."</td>";
	 echo "<td>".$row['Status']."</td>";
	 echo "<td>".$row['Remarks']."</td>";
	
	 echo "<td><a href=Delete.php?id=".$row['Id'].">Delete</a></td>";
	 echo "<td><a href=AdminH.php>refresh</a></td>";
	 //session_destroy();
	 
	 
 }
 
 
}
else
	
{

	echo '<h3><font color="red">Please Login First</font></h3>';	
}
 
 
 
 
 
 
 
 
 ?>
 
 
 
</table>


<br><br>
								<h2>Contact Us Persons Table :-</h2>
								<br>

<table class='table table-hover'>
  <tr>
	   <th align="middle"><h4>Id</h4></th>
    <th align="middle"><h4>Name</h4></th>    
      <th align="middle"><h4>Email</h4></th>
	  <th align="middle"><h4>Commend</h4></th>
        
  </tr>
 
 <?php

if(isset($_SESSION['userName1']))
{
	
	//session_destroy();

//$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

$con=mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
	echo 'Not Connect to the Server';
}

 if(!@mysqli_select_db($con,'jctechnology'))
 {

	 echo 'DataBase Not Connected';
 }
 
 $sql="SELECT * FROM `contact`";
 
 $records=mysqli_query($con,$sql);
 
 while($row = mysqli_fetch_array($records))
 {
	 echo "<tr>";
	 echo "<td>".$row['Id']."</td>";
	 echo "<td>".$row['Name']."</td>";
	 echo "<td>".$row['Email']."</td>";
	 echo "<td>".$row['Commend']."</td>";
	
 }
 
}
else
{
	
	echo '<h3><font color="red">Please Login First</font></h3>';
}
 
 
 
 
 
 
 ?>
 
</table>





<a class="btn btn-theme btn-lg" href="http://jctechnology.in/index.html">Go To Home</a>
</div>
</div>
</div>
</body>
</html>