<?php
 $conn=new mysqli('localhost','root','','login');
 if(!$conn)
 {
 	echo "Connection Failed || Contact to Website Administrator";
 }
 else{
    $first=$_POST['firstname'];
    $last=$_POST['lastname'];
    $email=$_POST['myemail'];
    $pass=$_POST['mypass'];
    $q="insert into user(first,last,email,pass) values ('$first','$last','$email','$pass')";
    $delta=mysqli_query($conn,$q);
    if($delta)
    {
    	//echo "sucessfully entered data ";
    }
    else{
    	echo "Data Can't be entered || Contact Website Administrator";
    }

   }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>REGISTRATION</title>
 </head>
 <body>
 	<center>
 	<H2>Sucessfully Registered</H2><br>
 	<hr width="20">
 	<h4><a href="login practise.php">Click Here to Login</a></h4>
 </center>

 
 </body>
 </html>