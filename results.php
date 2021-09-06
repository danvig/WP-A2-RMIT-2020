<!DOCTYPE html>
<html>

<head>

    <!-- NOTE: This page will throw errors if the logged in user has yet to submit any exercise
    data as they have no data in user_stats.json. -->
    <meta charset="UTF-8">
    <title>myResults | myFitness by the Adrenaline Buzz Club</title>

    <!-- Import Botostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://getbootstrap.com.vn/examples/equal-height-columns/equal-height-columns.css" />

    <!-- Import CSS -->
    <link rel="stylesheet" href="../a2/css/myfitness.css">
    <link rel="stylesheet" href="../a2/css/logbook.css">

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> 

    <style>
    /* Error message style */
        .error {
            color: #FF0000;
        }
    </style>
    
    <?php
    session_start();

    // This is to greet the user personally in the page
    $firstname = $_SESSION['name'];

    // If a user is not logged in, they will be directed to the login page
    if (!isset($_SESSION['username'])) {
        header("Location:login.php");
    }
    ?>

    <?php
        // Get current date
        date_default_timezone_set('Australia/Melbourne');
        $todayDate = date('d/m/Y');
        $date = $todayDate;

        // Clear error variable
        $dateErr = '';

        // When the user selects a new date
        if (isset($_POST["dateSubmit"])) 
        {
            // Validate if date is in correct format
            if ($_POST["date"] == "")
            {
                $dateErr = "Please input a date in the correct format (DD/MM/YYYY)";
            }
            // If date is valid, assign to variable
            else
            {
                $date = $_POST['date'];
            }
        }
    ?>

</head>


<body>
    <!-- Header from myFitness Header File -->
    <?php
        require_once '../a2/includes/myFitness Header.php';
    ?>

    <!-- Weekly Routine -->
    <!-- Load PHP -->
    <?php include '../a2/includes/exerciseroutine.php' ?>

    <div name="exerciseplan" id="exerciseplan">
        <div class="exercisehead">
            <br><h3 class="text-center"><u>Weekly Exercise Routine</u></h3><br>
            <!-- This is where the user is greeted personally as they see that the workout program is designed specifically for them -->
            <p class="text-center">This weekly routine has been created personally for <u><?php echo $firstname; ?></u></p>
            <p class="text-center">The following journal has taken into account your recently completed exercise and will determine an exercise plan for the next week. 
            This is to ensure you have a different workout experience every time. A third-party video has also been provided to get you started with the recommended exercise</p>
                <br>
        </div>
        
        <div class="modal-body row">
            
            <!-- Monday Plan -->
            <div class="col-md-4 monday">
                <h3 class="text-center"><u>Monday</u></h3>
                <p><strong>Recommended Exercise: </strong> <u><?php echo $mondayExercise; ?></u></p>
                <p><?php echo $mondayAdvice; ?></p>

                <!-- Video -->
                <iframe width="400" height="315"
                    src="<?php echo $mondayVideo; ?>">
                </iframe>
            </div>
            
            <!-- Tuesday Plan -->
            <div class="col-md-4 tuesday">
                <h3 class="text-center"><u>Tuesday</u></h3>
                <p><strong>Recommended Exercise: </strong> <u><?php echo $tuesdayExercise; ?></u></p>
                <p><?php echo $tuesdayAdvice; ?></p>

                <!-- Video -->
                <iframe width="400" height="315"
                    src="<?php echo $tuesdayVideo; ?>">
                </iframe>
            </div>
            
            <!-- Wednesday Plan -->
            <div class="col-md-4 wednesday">
                <h3 class="text-center"><u>Wednesday</u></h3>
                <p><strong>Recommended Exercise: </strong><u><?php echo $wednesdayExercise; ?></u></p>
                <p><?php echo $wednesdayAdvice; ?></p>

                <!-- Video -->
                <iframe width="400" height="315"
                    src="<?php echo $wednesdayVideo; ?>">
                </iframe>
            </div>
        

        <div class="modal-body row">

            <!-- Thursday Plan -->
            <div class="col-md-6 thursday">
                <h3 class="text-center"><u>Thursday</u></h3>
                <p><strong>Recommended Exercise: </strong><u><?php echo $thursdayExercise; ?></u></p>
                <p><?php echo $thursdayAdvice; ?></p>

                <!-- Video -->
                <iframe width="400" height="315"
                    src="<?php echo $thursdayVideo; ?>">
                </iframe>
            </div>

            <!-- Friday Plan -->
            <div class="col-md-6 friday">
                <h3 class="text-center"><u>Friday</u></h3>
                <p><strong>Recommended Exercise: </strong><u><?php echo $fridayExercise; ?></u></p>
                <p><?php echo $fridayAdvice; ?></p>

                <!-- Video -->
                <iframe width="400" height="315"
                    src="<?php echo $fridayVideo; ?>">
                </iframe>
            </div>

        </div>

    </div>
    </div>

    <!-- Calendar -->
    <!-- I couldn't get my calendar finished, but I left what I had in case I could get partial marks -->
    <!-- <div>
        <div class="exercisehead">
            <br><h3 class="text-center"><u>Weekly Data</u></h3><br>
        </div>
        <div class="modal-body row"> -->
            <!-- Date Picker -->
            <!-- <div class="col-md-4"> -->
                <!-- User Information -->
                <!-- <h4><u>View Burned Calories</u></h4>
                <p>Use the following form to input a date and view your burned calories for that day. If no data is available, you will be informed</p> -->
                
                <!-- Form -->
                <!-- <form method="post">
                <label for="date">Date (DD/MM/YYYY)</label>
                <div class="input-group date" data-date-format="dd/mm/yyyy">
                    <input type="text" name="date" id="date" class="form-control" value="<?php echo $date?>">
                    <div class="input-group-addon" >
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <br><p><span class="error">* <?php echo $dateErr; ?></span></p>
                <br><button type="submit" class="btn btn-primary" id="dateSubmit" name="dateSubmit">Submit</button>
                </form>
            </div> -->

            <!-- Data Display -->
           <!-- <div class="col-md-8 calendar">
                <div>
                    <p><strong>Today's Date:</strong> <u><?php echo $todayDate ?></u></p>
                    <p><strong>Selected Date:</strong> <u><?php echo $date ?></u></p>
                </div>

            </div>
        </div>
    </div> -->


    <!-- Footer -->
    <?php
    require_once '../a2/includes/myFitness Footer.php';
    ?>


</body>

</html>