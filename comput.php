<?php 
session_start();

 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Complaint</title>
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
		<h1><label title="Please fill out the form and submit it !">DESCRIBE YOUR INCIDENT</label></h1>
		<p>Fill up the form and hit on submit | Please do not specify your identity anywhere |</p></center>
	</div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="logoutme.php">Not You?</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="comput.php">Submission</a></li>
      <li><a href="help.php">HELP</a></li>
      <li class="navbar-default"><a href="complainpage.php">All Submissions</a></li>
    </ul>
  </div>
</nav>
	<div class="container">
	<center>
		<h2><u><label title="Please do not provide fake content otherwise it would be filtered out ">Provide Genuine Data Only</label></h2></u>


 <form method="POST" method="POST" action="sucesspage.php" id="form1" style="margin-top: 10%; "> 

 <table>

 	<tr>
 		<td height="70" width="70">User ID</td>
 		<td height="70" width="70"><input  disabled style=" height: 30px; font-size:20pt; background-color:black; color:white;" type="text" name="user" value="<?php echo $_SESSION['username'];?>" readonly></td>
 	</tr>

 	<tr>
 		<td height="70" width="70">E-Mail</td>
 		<td height="70" width="70"><input  disabled style=" height: 30px; font-size:20pt; background-color:black; color:white;" type="text" name="email" value="<?php echo $_SESSION['email'];?>" readonly></td>
 	</tr>

 	<tr>
 		<td height="70" width="70"> Title </td>
 		<td height="70" width="70"> <input style="height: 30px; font-size:20pt;" size="35"  type="text" placeholder="Incident Title" name="title"></td>
 	</tr>
 	<tr>
 		<td height="70" width="70" > Date </td>
 		<td height="70" width="70"> <input style="height: 30px; font-size:20pt;" size="35" type="Date" name="date" placeholder="Date"></td>
 	</tr>
 	<tr>
 		<td height="150" width="70"> Culprit | Organisation Name</td>
 		<td height="70" width="70"> <input style="height: 30px; font-size:20pt;" size="35" type="text" name="culprit" placeholder="Name of Culprit"></td>
 	</tr>
 	<tr>
 		<td height="70" width="70"> Description </td>
 		<td height="70" width="70"> <textarea rows="4" cols="38" style=" font-size:20pt; size="35" name="description" placeholder="Describe Everything About the Incident Here"></textarea></td> 
	</tr>
	
	<tr>
		<td height="100" width="100" colspan=2> <input style="height: 30px;" size="35" type="checkbox" name="answer" id="answer" value="yes" required><label for="answer"><span style="background-color:white;border:1px black solid;">Click here to confirm the information is correct !</span></label></td>
	</tr>

 </table>


 </form>
 <input type="submit" value="Submit" form="form1" name="toching">


</center>
</div>
</body>
</html>