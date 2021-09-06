<!-- 
This is the navigation bar used in the myFitness Header.php file
Used in the file using a PHP includes
This does not apply to the Adrenaline Buzz Club pages as it has its own header and footer
-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <!-- Import jQuery and Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <!-- Menu Bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">Adrenaline Buzz Club</a>
            </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="myfitness.php">myFitness Home</a></li>
        <li><a href="logbook.php">Logbook</a></li>
        <li><a href="results.php">Results</a></li>
        <li><a href="index.php">ABC Home</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>

</body>

</html>