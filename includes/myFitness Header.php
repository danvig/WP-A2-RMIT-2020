<!-- 
This is code for the header of the myFitness webpages
Used in the files using a PHP includes
This does not apply to the Adrenaline Buzz Club pages as it has its own header and footer
-->

<!DOCTYPE html>
<!-- This is the main header for myFitness -->
<html lang="en">

<head>

    <meta charset="UTF-8">
    <!-- Import jQuery and Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <!-- Header -->
    <div class="jumbotron text-center" style="margin-bottom:0">
      <img src = "../a2/assets/myFitness Logo.png"></img>
    </div>

    <!-- Menu Bar from myfitnessNav file -->
    <?php
        require_once '../a2/includes/myfitnessNav.php';
    ?>

    <!-- This is the search bar to search for activities -->
    <?php
        require_once '../a2/includes/myFitnessSearch.php';
    ?>

</nav>
</body>

</html>