<!-- verify credentials in database before logging user -->
<?php 
//connect to database
require_once('database.php');
    if(isset($_POST['login'])){
        //get values input by user and store into username and password variables
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $pwd = md5($password); //encrypt password
        //read username and password and query into database
        $query = "SELECT * FROM users where username='$username' AND password='$pwd' LIMIT 1";
        $result=mysqli_query($conn, $query); //return result 

        if(mysqli_num_rows($result)==1){ // if values entered match a record in database
            $_SESSION['username'] = $username; //store username into session to be used in index.php
            $_SESSION['success'] = "You are logged in"; //return success message in index.php
            header('location: index.php?success=logged');
            exit();
        } else { //if wrong user name or password, reload login page and display error in location bar
            header("Location: login.php?error=wrongusernameorpassword");
        } 
} ?>