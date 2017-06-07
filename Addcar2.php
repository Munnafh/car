<?php  
 $connect = mysqli_connect('127.0.0.1','root','root','jctechnology');  
 if(isset($_POST["insert"]))  
 { 
      $CarName=$_POST['CarName'];
      $CarDetails=$_POST['CarDetails'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name,CarName,CarDetails ) VALUES ('$file','$CarName','$CarDetails')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Destiny Wheels</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert Car Details</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data"> 
<input placeholder="Enter Car Name..." name="CarName" id="search" class="form-control input-md" type="text" required />
				<input placeholder="Enter Car Details..." name="CarDetails" id="search" class="form-control input-md" type="text" required />
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
 <!--               <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                     <th align="middle"><h4>Image</h4></th>  
                       
					 <th align="middle"><h4>CarName</h4></th>
                     <th align="middle"><h4>Details</h4></th>
	                </tr>
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
			         echo "<tr>";
                     echo '  
                            
                               "<td>"  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               "</td>" 

                               						   
                         
                     '; 

                     echo "<td>".$row['CarName']."</td>"; 
	                 echo "<td>".$row['CarDetails']."</td>";						 
                }  
                ?>  
                </table> -->  
				<br><br><br><br><br><br><br>
			<center>	<a class="btn btn-theme btn-lg" href="http://localhost:8080/dw/Admin.html">Admin Login</a></center>
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