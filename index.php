<?php
include("authorization.php"); ?>

<html>
<head>
<meta charset="utf-8">
<title>Welcome Home Sample's Portal by Fadhil Ali</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="container" align="Center">
<p>Welcome <b/><?php echo $_SESSION['username']; ?></b> in this Portal</p>
<p>This is a Sample's portal designed for the Intern Task 2019 by Fadhil Ali</p>
<p><a href="dashboard.php">Portal Dashboard</a></p>
<a href="logout.php">Portal Logout</a>

</div>
</body>
</html>
