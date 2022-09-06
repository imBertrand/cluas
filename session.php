<?php
session_start();
 
if(!isset($_SESSION['username']))
{
header("Location: ../../app/staffLogin.php");
exit(); 
}