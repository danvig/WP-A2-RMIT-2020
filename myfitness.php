<!DOCTYPE html>
<html>

<head>

    <!-- I gave myFitness a revamped design as compared to Adrenaline Buzz Club
    As I wanted to give the myFitness members a unique experience compared to non-members -->
    
    <meta charset = "UTF-8">
    <title>myFitness by the Adrenaline Buzz Club</title>

    <!-- Import Botostrap -->
    <!-- Note to self: Bootstrap is fantastic for web design -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../a2/css/myfitness.css">
    
    <?php
        session_start();
        $name = $_SESSION['name'] .' ' . $_SESSION['lastname'];

        // If a user isn't logged in
        if(!isset($_SESSION['username']))
        {
            // They cannot access myFitness and will be directed back to the login page
            header("Location:login.php");
        }
    ?>

</head>

<body>
    <!-- Header from myFitness Header File -->
    <?php
        require_once '../a2/includes/myFitness Header.php';
    ?>
    
    <!-- Page Content -->
    <!-- Header / Welcome Message -->
    <div class="container">
        <h4 class="text-left">Welcome to myFitness <u><?php echo $name ?></u></h4>
        <h2 class="text-center">Welcome to myFitness</h2>
        <p class="text-center">myFitness is a service provided by the Adrenaline Buzz Club to our registered members. Users can use this service as a logbook of exercise.
            <br> Simply select one of the following categories below and you will be able to input details about your workout as well as 
            <br> vital statistics and this will all be stored for you on our secure server.
        </p>

        <h4 class="text-center">Give us a try today!</h4>
        <!-- Global Device Message -->
        <center>
        <img src="../a2/assets/AllDevices.png" width="600" height="400"></img>
        <p style="text-align: center;">myFitness works across all your devices!</p>
        <a href="logbook.php"><button type="button" class="btn btn-primary">Try it Now!</button></a>
        </center>
        <br>
        <!-- -->
    </div>
    
    <!-- Icons which direct user to logbook -->
    <div class="main-container">
        <div class="container">
            <h2 class="text-center">Exercise Logbook</h2>
            <p class="text-center">Select an option below to add vital statistics and exercise data to your logbook.</p>
            <br>
            <div class="row">
            <!-- Dog Walking -->
                <div class="col-md-3 border"><a href="logbook.php#exercise"><img class="img-responsive center-block" src="../a2/assets/Dog Icon.png" width=150 height = 150></a>
                <p style="text-align: center;"><strong>Dog Walking</strong></p>
            </div>

            <div class="row">
            <!-- Walking -->
                <div class="col-md-3 border"><a href="logbook.php#exercise"><img class="img-responsive center-block" src="../a2/assets/Walking Icon.png" width=150 height = 150></a>
                <p style="text-align: center;"><strong>Walking</strong></p>
            </div>

            <div class="row">
            <!-- Running -->
                <div class="col-md-3 border"><a href="logbook.php#exercise"><img class="img-responsive center-block" src="../a2/assets/Running Icon.png" width=150 height = 150></a>
                <p style="text-align: center;"><strong>Running</strong></p>
            </div>

            <div class="row">
            <!-- Cycling -->
                <div class="col-md-3 border"><a href="logbook.php#exercise"><img class="img-responsive center-block" src="../a2/assets/Cycling-Icon.png" width=150 height = 150></a>
                <p style="text-align: center;"><strong>Cycling</strong></p>
            </div>
            <!-- Close Image DIVs -->
            </div></div></div></div>
        </div>
    </div>

    <!-- Footer -->
    <?php
        require_once '../a2/includes/myFitness Footer.php';
    ?>

</body>

</html>