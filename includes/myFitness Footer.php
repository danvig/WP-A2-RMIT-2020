<!-- 
This is code for the footer of the myFitness webpages
Used in the files using a PHP includes
This does not apply to the Adrenaline Buzz Club pages as it has its own header and footer
-->

<!DOCTYPE html>
<!-- This is the footer used widely across all of myFitness -->
<html lang="en">

<head>

    <meta charset="UTF-8">
    <!-- Import jQuery and Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <?php
      // Sitemap for Footer
      $pagename = basename($_SERVER['PHP_SELF']); /* Returns The Current PHP File Name */
      $displayname = '';

      if($pagename == 'myfitness.php')
      {
        $displayname = 'Home';
      }
      else if($pagename == 'logbook.php')
      {
        $displayname = 'Home / Logbook';
      }
      else if($pagename == 'results.php')
      {
        $displayname = 'Home / Results';
      }

    ?>

</head>

<body>
  <footer>
    <div class="bg-dark">
      <div class="container">
        <div class="col-sm-8 col-md-7 py-4">
          <br><p class="footer-text"><a href="#">Back to top</a> | <a href="sitemap.php">Sitemap</a></p>
          <p style="float: left" class="footer-text"><?php echo $displayname;?></p><br>
        </div>

        <div class="col-sm-4 offset-md-7 py-4">
          <br><p class="footer-text"><strong>myFitness by Adrenaline Buzz Club</strong></p>
          <p class="footer-text">myFitness is an exclusive service available to our registered users. All information is securely stored and is only available to you.</p>
          <p class="footer-text">Web Design by <a href="s3844180@student.rmit.edu.au">Daniel Viglietti.</a> All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>