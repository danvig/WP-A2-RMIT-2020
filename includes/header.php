<!-- 
This is code for the header of the Adrenaline Buzz Club main webpages (minus the Index page)
Used in the files using a PHP includes
This does not apply to the myFitness pages as it has its own header and footer.
This does not apply to index.php as it has its own header which features the weather.
The reason I separated the index header and header for the rest of the site is because my weather API only allows
A certain number of calls a month. And everytime the header is loaded that counts as a call
-->

<!DOCTYPE html>
<!-- This is the header for the main pages for the site
Differs to that of the main page header as it doesn't feature the weather API -->
<html lang="en">

<head>

    <meta charset="UTF-8">
    <!-- Import CSS -->
    <link rel="stylesheet" href="../a2/css/a2site.css">

</head>

<body>

    <!-- Header -->
    <header>
        <canvas id="canvas" width="640" height="100">
            <script type="text/javascript" src="../a2/js/logo.js"></script>
        </canvas>
        <p> Email: admin@abcgym.com.au | Location: Melbourne | Phone: +61 491 570 156</p>
    </header>

    <!-- Menu Bar from the Navbar File -->
    <?php
    require_once '../a2/includes/navbar.php';
    ?>
</body>

</html>