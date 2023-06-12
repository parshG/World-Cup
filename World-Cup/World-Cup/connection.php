<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";// find in xaamp-->phpmyadmin-->config.inc.php
$dbname = "login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
