<?php
/*
Programmer: Fadhil Ali
Jan 26th, 2019 
*/
?>

<html>
<head>
<meta charset="utf-8">
<title>Fadhil Ali Sample's Portal Registration Form</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('dbconnect.php');
    
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form' align='center'><h3>You are registered !! successfully via this Sample's Portal</h3><br/>Click here to <a href='login.php'> Portal Login</a></div>";
        }
    }else{
?>
<div class="container" align="Center">
<h1>Registration Form</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
<p><a href="login.php">Go Back to Portal Login</a></p>
</div>
<?php } ?>
</body>
</html>
