<?php
session_start();
$_SESSION["user"] = '';
if(!$_SESSION["user"]){
if (isset($_POST['username']) && isset($_POST['password'])){
 	if($_POST['username'] == "admin" && $_POST['password']=="admin"){
			$_SESSION["user"] =$_POST['username'] .$_POST['password'];
	header('Location: update.php');
}else {
  echo '<center><div class="alert alert-danger">
  Invalid Credentials , Try Again!
</div></center>';
}
}
}else {
	header('Location: update.php');
exit();
}
?>



<head>

  <meta charset="UTF-8">
  <title>CyberSpace Login</title>
  
  
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="background-wrap">
  <div class="background"></div>
</div>

<form id="accesspanel" method="post" align="center">
  <h1 id="litheader" align="center">CyberSpace</h1>
  <div class="inset">
    <p>
      <input type="text" name="username" id="email" placeholder="Username">
    </p>
    <p>
      <input type="password" name="password" id="password" placeholder="Password">
    </p>

    <input class="loginLoginValue" type="hidden" name="service" value="login" />
  </div>
  <p class="p-container">
    <input type="submit" name="login" id="go" value="Authorize">
  </p>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>

</html>