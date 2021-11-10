<?php 
/* SESSION is used to track logged in users - use session_start() at the beginning of the file */ 

session_start();

//create variables which will be used to connect to the database
$dbHost = "localhost";  //host name 
$dbUser = "root";  //mysql username
$dbPass = "";   //password
$dbName = "user_info";  //name of database

//create database connection
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);  

if (!$conn){   //create condition to see if connection actually exists - if conn is true, do nothing, else use die function
    die("Database connection failed!");
} 
?>