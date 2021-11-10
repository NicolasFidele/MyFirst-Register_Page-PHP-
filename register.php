<?php 
require_once('database.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type = "text/CSS" href="style.css">
</head>
<body>
<div class="register-form">
    <!-- When submit is clicked, the page is routed to include-register.php to check for errors and register the user -->
    <fieldset>
    <form action = "include-register.php" method = "POST">
        <h1>Register</h1> 
        <!-- placeholders are used rather than label -->
        <!-- users will create their username and password here -->
        <input class = "text" type = "text" name="username" placeholder="Create a User Name" required>
        <input class = "password" type = "password" name="password" placeholder="Password" required>
        <input class = "password" type = "password" name="confirmpassword" placeholder="Confirm Password" required>
        <!-- in this part users will enter their personal details -->
        <b><p>Enter  details</p></b>
        <input class = "text" type = "text" name="firstname" placeholder="First Name" required>
        <input class = "text" type = "text" name="surname" placeholder="Surname" required>
        <input class = "email" type = "email" name="email" placeholder="Email" required>
        <label class="label">Gender:</label>
            <input class = "radio" type="radio" name="gender" value="male">Male
            <input class = "radio" type="radio" name="gender" value="female">Female<br><br>
        <label for="">Date of Birth</label><input type = "date" name="dob"><br>

        <button type = "submit" name="submit">REGISTER</button>
        
        <!-- offer user a link to log in if already has an account -->
        <b><p>Already have an Account?</p></p> <a class="link-style" href = "login.php">Log in</a>
    </form>
    </fieldset>
</div>
</body>
</html>

