<?php
/*
Programmer: Fadhil Ali Alsahlanee
Jan 26th, 2019
Sample for Intern test task
*/
?>

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
