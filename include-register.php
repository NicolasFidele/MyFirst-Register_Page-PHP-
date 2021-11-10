<!--register users to the database -->
<?php 
//connect to database
require_once('database.php');

if (isset($_POST['submit'])) {  //as user clicks on submit
    //Obtain values input by the user in the form and store in the variables $username, $password etc...
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpassword'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    //confirm that the two passwords match
    if($password != $confirmpass){
        header("Location: register.php?error=passwordsdonotmatch");   //display inside browser location bar. Redirect to register.php
        exit();
    }
    //check to see if the username entered in the form does not already exist in the database
    //using sql SELECT statement
    $verify_query = "SELECT username FROM users WHERE username ='$username' LIMIT 1"; //return 1 record only
    //$conn is the variable used in database.php to create connection to the database using mysqli_connect
    $result = mysqli_query($conn, $verify_query);  
    $user = mysqli_fetch_assoc($result);  //return associative array corresponding to the fetched row (username)
    //return error message if name already exists (in the associative array)
    if ($user) { 
        if ($user['username'] === $username) {
            header("Location: register.php?error=usernameexists"); 
            exit();
        }
      }
        //Register user into database if no errors are found (username / password errors)
        $pwd = md5($password);  //password encrypted before saving into database
        $query = "INSERT INTO users (username, password, firstname, surname, email, gender, dob) 
        VALUES ('$username', '$pwd', '$firstname', '$surname', '$email', '$gender', '$dob')";
        
        mysqli_query($conn, $query);  //run query into database
        //use $_SESSION to store username and a confirmation message - to be used in the index page
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You have been registered";  
        header('location: index.php?registrationsuccess');   //redirect user to the index.php page
        
        mysqli_close($conn);  //close database connection
}
?>