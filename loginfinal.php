<?php
if(isset($_POST['toched'])){
session_start();

 $conn=new mysqli('localhost','root','','login');
 if(!$conn)
 {
 	echo "Connection Failed...";
 }
 else{
 	//echo "Connection Done";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $q=("select * from user where first='$username' and pass='$password'");
    $delta=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($delta);
    if($row['first']==$username &&$row['pass']==$password)
    {
        setcookie('username',$username,time()+60*60);
        setcookie('password',$password,time()+60*60);
        $_SESSION['username']=$row['last'];
        $_SESSION['email']=$row['email'];
        header('Location: ashuassign9.php');
    }
    else{

        echo"<body bgcolor=#FFC0CB>";
        echo "<center><h1>Username and Password doesn't Match </h1></center><br>";
        echo '<center><a href="login practise.php"> <h2>Click Here</a> To Try Again </h2></center><hr>';
                        echo"<marquee scrollamount='20' style='font-size:40px;position:absolute;top:70%;'>Please click on Register above to Register yourself......</marquee>";

                        echo '<center style="color:brown;background-color:yellow;left:30%;right:30%;position:absolute;"><a href="registration.html"> <h2>Click Here</a> To Register</h2></center>';


    }
}
}
else{
    echo "<center><h2><div style='background-color:black;color:white;position: absolute; left:20%;top:40%;font-family: Arial, Helvetica, sans-serif'>This website requires login | Direct Access Denied | <a href='login practise.php'>Click Here</a> : For login .</center><h2></div>";
}

 ?>