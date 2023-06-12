<?php

//if this file is called then it resets username and goes to login pagee
session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

header("Location: index.php");
die;
