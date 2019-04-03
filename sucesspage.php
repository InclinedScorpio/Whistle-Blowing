<?php

if(isset($_POST['toching'])){
session_start();
}

 $conn=new mysqli('localhost','root','','complaint');
 if(!$conn)
 {
 	echo "Connection Failed...";
 }
 else{
 	//echo "Connection Done";
    $user=$_SESSION["username"];
    $email=$_SESSION["email"];
    $title=$_POST['title'];
    $date=$_POST['date'];
    $culprit=$_POST['culprit'];
    $description=$_POST['description'];

        $q="insert into comptable(user,email,title,date,culprit,description) values ('$user','$email','$title','$date','$culprit','$description')";
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
    <title>Submitted</title>
 </head>
 <body>
    <center>
    <H2>Sucessfully Submitted Your Complaint !! </H2><br>
    <hr width="20">
    <h4><a href="ashuassign9.php">Click Here</a> to Go back to Home page !!</h4>
 </center>
</body>
 </html>