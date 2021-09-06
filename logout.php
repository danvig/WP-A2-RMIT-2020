<!DOCTYPE html>
<html>

<head>
    
    <meta charset = "UTF-8">
    <title>ABC Online Exercise | Logged Out</title>
    <link rel="stylesheet" href="../a2/css/a2site.css">
    
    <link rel="stylesheet" href="../a2/css/regForm.css">

    <!-- Cancel Login Session -->
    <?php
        session_start();
        // When session_destroy is called, it cancels the username, age, and firstname sessions
        // So that a user is no longer logged in. To get back to myFitness they must login again
        // This also means if they tried to access myFitness through the sitemap and were logged out, they'd be asked to log in again
        session_destroy();
    ?>

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

    <div id="container">
        <center><br><img src="../a2/assets/myFitness Logo.png"></center>
        <center>
            <p id = "new_font">Thank you for using myFitness by the Adrenaline Buzz Club.</p>
            <hr>
    </div>
    
    <!-- Logged out alert -->
    <div id="container">
    <div id="grid-container">
        <h3>Logged Out</h3>
        <h5>Your session has ended and you have been logged out of myFitness. <br><br><a href="index.php">Return to Adrenaline Buzz Club</a></h5>
    </div>
    </div>

    <!-- Footer -->
    <div style="clear: both"></div>
    <?php
        require_once '../a2/includes/footer.php';
    ?>

</body>

</html>