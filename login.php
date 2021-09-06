<!DOCTYPE html>
<html>

<head>
    
    <meta charset = "UTF-8">
    <title>ABC Online Exercise | Login</title>
    <!-- Import CSS -->
    <link rel="stylesheet" href="../a2/css/a2site.css">
    
    <link rel="stylesheet" href="../a2/css/regForm.css">

    <link rel="stylesheet" href="../a2/css/login.css">

</head>

<body>
    <!-- Header -->
    <?php
        require_once '../a2/includes/header.php';
    ?>
    
    
    <!-- Header Slideshow -->
    <?php
        require_once '../a2/includes/slideshow.php';
    ?>

    <!-- Getting Login Data -->
    <?php
        session_start();
        
        // Get and Clear Variables
        $email = $password = '';
        $emailErr = $passwordErr = '';

        // Get JSON Login Data
        $file = file_get_contents('../a2/data/users.json');
        $loginContents = json_decode($file, true);

        if(isset($_POST["submit"]))
        {

            foreach ($loginContents as $k => $v)
            {
                $email = $_POST["username"];
                // If the username and password are valid
                if($_POST["username"] == $v['Email'] && $_POST["password"] == $v['Password'])
                {
                    // Assign the usename, user age, and first name to global variables
                    $_SESSION['username'] = $v['Email'];
                    $_SESSION['age'] = $v['Age'];
                    $_SESSION['name'] = $v['FirstName'];
                    $_SESSION['lastname'] = $v['LastName'];
                    // Direct user to myFitness
                    header('Location: myfitness.php');
                }
                else
                {
                    // Otherwise an error is issued
                    $emailErr = "Please enter a valid email";
                    $passwordErr = "Please enter a valid password";
                }
            }
        }
    ?>

    <div id="container">
        <br>
    <!-- Login Form -->
    <div class = "login">
    <center><img src="../a2/assets/myFitness Logo.png"><hr></center>
    <!-- Original Photo and Logo made by me -->
    <h4 class="header">Login</h4>
    <label class = "placeholder">Login to myFitness using your personal login credentials</label>
    <form id = "login" method="POST">
        <br>
        
        <div>
        <!-- Email Input -->
        <label class="placeholder">Email:</label><br>
        <input type="text" name = "username" id="username" class="username" value=<?php echo $email ?>>
        <span class="error">* <?php echo $emailErr; ?></span>
        </div>
        
        <br>
        
        <div>
        <!-- Password Input -->
        <label class="placeholder">Password:</label><br><br>
        <input type="password" name = "password" id="password" class="password">
        <br><br><span class="error">* <?php echo $passwordErr; ?></span>
        </div>

        <br><br><div><input type="submit" name="submit" value="Login"/></div><br>

        <!-- IF THE USER ISN'T REGISTERED, INVITE THEM TO REGISTER -->
        <label class="miscellaneous">Not registered? <a href="join.php">Sign up now!</a></label>
    </form>

    </div> <!-- Close Login Div -->
    <br>

    </div>

    <!-- Footer -->
    <div style="clear: both"></div>
    <?php
        require_once '../a2/includes/footer.php';
    ?>

</body>

</html>