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
        


</head>
<body style="color:black; background-color:#686520;">

<div class="container">

		<div class="row">
							<div class="col-sm-4 col-sm-4 col-sm-4 ">
							<br><br>
							
							<center><h3>Admin Section!! Only For Admin Uses</h3></center>
							

<br><br><br><br>
<a class="btn btn-theme btn-lg" href="http://localhost:8080/dw/Addcar2.php">Add Car</a>
<br><br>
								<h2>Car Lists Table :-</h2>
								<br>



<table class='table table-hover table-inverse'>
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
 
 $sql="SELECT * FROM `tbl_images`";
 
 $records=mysqli_query($con,$sql);
 
 while($row = mysqli_fetch_array($records))
 {
	 echo "<tr>";
	 echo "<td>".$row['id']."</td>";
	 echo '  
                            
                                <th>
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="20" width="20" class="img-thumnail" />  
                               </th>

                               						   
                         
                     '; 
	 echo "<td>".$row['CarName']."</td>"; 
	 echo "<td>".$row['CarDetails']."</td>";
	
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

<table class='table table-bordered'>
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