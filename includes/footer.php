<!-- 
This is code for the footer of the Adrenaline Buzz Club main webpages
Used in the files using a PHP includes
This does not apply to the myFitness pages as it has its own header and footer
-->
<!DOCTYPE html>
<!-- This is the footer used across the site -->
<html lang="en">

<?php
    // Sitemap for Footer
    $pagename = basename($_SERVER['PHP_SELF']); /* Returns The Current PHP File Name */
    $displayname = '';

    // Determine display name
    if($pagename == 'contact.php')
    {
        $displayname = 'Home / Contact Us';
    }
    else if($pagename == 'healthdiary.php')
    {
        $displayname = 'Home / Health Diary';
    }
    else if($pagename == 'index.php')
    {
        $displayname = 'Home';
    }
    else if($pagename == 'join.php')
    {
        $displayname = 'Home / Join';
    }
    else if($pagename == 'login.php')
    {
        $displayname = 'Home / Login';
    }
    else if($pagename == 'logout.php')
    {
        $displayname = 'Home / Logout';
    }
    else if($pagename == 'services.php')
    {
        $displayname = 'Home / Services';
    }
?>

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="../a2/css/a2site.css">

</head>

<body>

    <footer>
        <br>
        <p style="float: left;">Privacy | <a href ="sitemap.php">Sitemap</a></p>
        <p style="float: rightl"><?php echo $displayname;?></p>
        <p>Copyright © 2020 Daniel Viglietti - All Rights Reserved</p>
        <p>Email: <a href="mailto:s3844180@student.rmit.edu.au">s3844180@student.rmit.edu.au</a></p>
        <p>Stock Images sourced for free use from <a href="http://www.unsplash.com">Unsplash.com</a></p>
        <br>
    </footer>

</body>

</html>