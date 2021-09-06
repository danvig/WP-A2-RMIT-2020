<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>ABC Online Exercise | Sitemap</title>

    <!-- jQuery Breadcrumbs Plugin -->
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="jquery.breadcrumbs-generator.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../a2/css/breadcrumbs.css">

</head>

<body>
    <script>
    // Breadcrumbs from sitemap
    // Breadcrumbs code sourced from https://www.jqueryscript.net/menu/jQuery-Plugin-To-Generate-Breadcrumbs-From-A-Sitemap.html
    // Based on example from Trevor's Tutorial
    $('#breadcrumbs').breadcrumbsGenerator({
  
    sitemaps  : '#sitemap',
    index_type: 'sitemap.php'
  
    });
    </script>

    <!-- For this I decided to keep it really short. I didn't really want anything too fancy for the sitemap -->

    <!-- Sitemap list -->
    <ol id="breadcrumbs">
        <li>Sitemap</li>
    </ol>
    
    <nav id="sitemap">
        <h2><span style="font-weight:normal">Sitemap</span></h2>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="healthdiary.php">Health Diary</a></li>
            <li><a href="join.php">Join Us/Registration</a></li>
            <li><a href="login.php">myFitness Login</a></li>
                <ul>
                    <li><a href="myfitness.php">myFitness</a></li>
                    <li><a href="logbook.php">myFitness Logbook</a></li>
                    <li><a href="logout.php">myFitness Logout</a></li>
                </ul>
            <li><a href="sitemap.php">Sitemap</a></li>
        </ul>
    </nav>

</body>

</html>