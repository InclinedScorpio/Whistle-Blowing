<?php


 $conn=new mysqli('localhost','root','','complaint');
 if(!$conn)
 {
 	echo "Connection Failed...";
 }
 else{

 	$sql="select * from comptable";
 	$records=mysqli_query($conn,$sql);
 }



?>

<!DOCTYPE html>
<html>
<head>
	<title>COMPLAINTS</title>
	<link rel="stylesheet" type="text/css" href="complainpage.css">
	<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

<link href="/mywebsitefolder/fontawesome/fontawesome-all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="computdesign.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	  <script type="text/javascript">
      document.body.style.zoom="60%";

</script>
	<div class="jumbotron">
		<center>
		<h1>ALL COMPLAINTS ARE SHOWN HERE</h1>
		<p>All comlaints are anymously posted | Please check proof before Concluding</p></center>
	</div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="logoutme.php"><label title="Want to Log out?">Not You?</label></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="navbar-default"><a href="comput.php">Submission</a></li>
      <li><a href="help.php">HELP</a></li>
      <li class="active"><a href="complainpage.php">All Submissions</a></li>
    </ul>
  </div>
</nav>
	<div class="bgbg"></div>
	<center>
		<h1><b><u>: COMPLAINTS REGISTERED :</b></h1></u><br><br>
		<table width="1500" border="0" cellpadding="40" cellspacing="20">
		<tr>
		<th width='15%'><h2>Username</h2></th>
		<th  width='15%'><h2>Date</h2></th>
		<th width='20%'><h2>TITLE</h2></th>
		<th width='20%'><h2>CULPRIT</h2></th>
		<th width='70%'><h2>DESCRIPTION</h2></th>
</tr>
</table>
<hr>
<table  width="1500" border="0" cellpadding="40" cellspacing="20" align="center" >
<?php
while($employee=mysqli_fetch_assoc($records)){
   	echo "<tr>";
   	echo "<td width='15%'><b><h3>".$employee['user']."</b></h3></td>";

   	echo"<td width='15%'>".$employee['date']."</td>";
   	echo"<td width='20%'>".$employee['title']."</td>";
   	echo"<td width='20%'>".$employee['culprit']."</td>";
   	echo"<td width='70%'>".$employee['description']."</td>";
   	echo"</tr></table><hr><table width='1500' border='0' cellpadding='40' cellspacing='20'>";


   }

   ?>
</table>
</center>
</body>
</html>


