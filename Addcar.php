<?php  
 $connect = mysqli_connect('127.0.0.1','root','root','jctechnology');  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
	  $CarName=$_POST['CarName'];
      $CarDetails=$_POST['CarDetails'];
      $query = "INSERT INTO addcar(CarName,CarDetails,Pic) VALUES ('$CarName','$CarDetails','$file')";
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?> 



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
							
	<br><br><br><br><br>
	
							
<form style="background-color:#808080"  method="POST" enctype="multipart/form-data" >
<br>
<center>
 <div class="form-group"> 
              <input placeholder="Enter Car Name..." name="CarName" id="search" class="form-control input-md" type="text" required /> 
              </div> 
              <div class="form-group"> <input placeholder="Enter Car Details..." name="CarDetails" id="search" class="form-control input-md" type="text" required /> 
              </div> 
              
             
              <div class="form-group"> <input type="file" name="Pic" id="image" required></div> <br><br>
			<div class="form-group"> 
<input class="btn btn-theme btn-lg" type="submit" value="Submit Now" id="insert" />		</div>		<br>	
								
</form>
<br>

</div>
</div>
</div>
</body>
</html>
<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
