<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Logbook | myFitness by the Adrenaline Buzz Club</title>

    <!-- Import Bootstrap, jQuery and CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../a2/css/myfitness.css">
    <link rel="stylesheet" href="../a2/css/logbook.css">

    <style>
    /* Error Message style */
        .error {
            color: #FF0000;
        }
    </style>

    <?php
    session_start();

    // If the user is not logged in, they can't access the page
    if (!isset($_SESSION['username'])) {
        header("Location:login.php");
    }
    ?>

    <?php
    // Clear variables
    $exerciseErr = '';
    $distanceAdvice = '';
    $successMessage = '';
    $BMIAdvice = '';

    // Last Exercise Variables
    $lastExercise = $lastWeight = $lastBMI = $lastTimeTravelled = $lastDistanceTravelled = $lastDistanceGoal = ' ';
    
    // Assign local variables to session variables
    $email = ($_SESSION['username']);
    $age = ($_SESSION['age']);

    // Get the current date for saving daily exercise data
    date_default_timezone_set('Australia/Melbourne');
    $date = date('d/m/Y');

    // Submit Exercise Data when button is pressed
    if (isset($_POST["exerciseSubmit"])) {
        $exerciseType = $distance = $time = $weight = $age = $bmi = $dailygoal = $caloriesburned = '';
        $distanceAdvice = $BMIAdvice = '';

        // Validate
        if ((empty($_POST["email"])) || (empty($_POST["distance"])) || (empty($_POST["time"]))
            || (empty($_POST["weight"])) || (empty($_POST["age"])) || (empty($_POST["dailygoal"])) || (empty($_POST["caloriesburned"]))
        ) {
            $exerciseErr = 'Please check all fields have been filled out and try again';
        }
        // Submit data
        else {
            // Successful Message
            $successMessage = "Current Data has been logged";

            // Assign inputs to variables
            $exerciseType = ($_POST["exerciseType"]);
            $distance = ($_POST["distance"]);
            $time = ($_POST["time"]);
            $weight = ($_POST["weight"]);
            $bmi = ($_POST["bmi"]);
            $dailygoal = ($_POST["dailygoal"]);
            $caloriesburned = ($_POST["caloriesburned"]);

            // Distance Advice
            $distanceGoal = $dailygoal - $distance;

            if ($distanceGoal < 0) {
                $distanceAdvice = 'You have reached your daily distance goal';
            } else {
                $distanceAdvice = 'Travel ' . $distanceGoal . 'KM(s) to reach your daily distance goal';
            }

            // Save to array
            // Fetch existing data
            $strFile = '../a2/data/user_stats.json';
            $arrExistingData = json_decode(file_get_contents($strFile), true);

            // Add new data to existing array
            $arrNewData =
                [
                    'Date' => $date,
                    'ExerciseType' => $exerciseType,
                    'CaloriesBurned' => $caloriesburned,
                    'DistanceTravelled' => $distance,
                    'TimeTravelled' => $time,
                    'Weight' => $weight + 'KG',
                    'BMI' => $bmi,
                    'DailyDistanceGoal' => $dailygoal + 'KM'
                ];

            // This formats it so that the Email Address is the key and the rest of the data is saved
            // Within this key so that it can be accessed for the results page
            // For a specific user
            $arrExistingData[$email][] = $arrNewData;

            // Save data to file
            file_put_contents($strFile, json_encode($arrExistingData, JSON_PRETTY_PRINT));
        }

        // BMI Advice
        if ($bmi <= 18.5) 
        {
            $BMIAdvice = "Underweight";
        } 
        else if ($bmi > 18.5 && $bmi <= 25) 
        {
            $BMIAdvice = "Healthy";
        } 
        else if ($bmi > 25 && $bmi <= 30) 
        {
            $BMIAdvice = "Overweight";
        } 
        else if ($bmi > 30) 
        {
            $BMIAdvice = "Obese";
        }
    }

    // Get last Exercise Data
    // Retrieving existing workout data
    $file = file_get_contents('../a2/data/user_stats.json');
    $activityData = json_decode($file, true);

    // Loop through data and get the last recorded set of data
    foreach($activityData[$email] as $k => $arr)
    {
        $highestExercise = count($arr['ExerciseType']);
        $highestWeight = count($arr['Weight']);
        $highestBMI = count($arr['BMI']);
        $highestTimeTravelled = count($arr['TimeTravelled']);
        $highestDistanceTravelled = count($arr['DistanceTravelled']);
        $highestDistanceGoal = count($arr['DailyDistanceGoal']);
    }

    // Save last data to variables - This will output to the logbook.
    $lastExercise = $arr['ExerciseType'];
    $lastWeight = $arr['Weight'];
    $lastBMI = $arr['BMI'];
    $lastTimeTravelled = $arr['TimeTravelled'];
    $lastDistanceTravelled = $arr['DistanceTravelled'];
    $lastDistanceGoal = $arr['DailyDistanceGoal'];

    // BMI is not always required, validate this for the logbook
    if ($lastBMI = 0)
    {
        $lastBMI = 'not recorded';
    }

    ?>

</head>

<body>
    <!-- Header from myFitness Header File -->
    <?php
        require_once '../a2/includes/myFitness Header.php';
    ?>

    <!-- Page Content -->
    <!-- Header -->
    <div class="container">
        <h2 class="text-center">Logbook</h2>
        <h4 class="text-center">The best minimalist online exercise tracker</h4>
        <p class="text-center">The myFitness Workout Logbook is designed to replace your paper workout journal and give you one online space to keep track of all of your workouts.
            myFitness has been developed exclusively for the Adrenaline Buzz Club and is available to all of our paying members and replicates what you can get out of the endless
            selection of poorly designed, user-unfriendly, workout tracking apps, it combines the best features found in other apps with a minimalistic approach and a clean,
            easy-to-use interface. Give it a try. We know you'll love it!</p>
        </p>

        <h4 class="text-center">Give us a try today!</h4>
        <center>
            <img src="../a2/assets/AllDevices.png" width="600" height="400"></img>
            <p style="text-align: center;">myFitness works across all your devices!</p>
        </center>

    </div>

    <!-- Exercise Tracker -->
    <div id="exercise">
        <h2 class="text-center">Exercise Tracker</h2>
        <h4 class="text-center">Today's date is: <u><?php echo $date; ?></u></h4>
        <h4 class="text-center"><?php echo $successMessage; ?></h4>
        <p><span class="error"><?php echo $exerciseErr; ?></span></p>
    </div>
    <!-- Form -->
    <form method="post">
        <div class="form-row">
            <!-- Inputs for Workout Information -->
            <h4>Workout Information</h4>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" readonly>
            </div>

            <div class="form-group col-md-6">
                <label for="exerciseType">Exercise Type</label>
                <select id="exerciseType" name="exerciseType" class="form-control">
                    <option selected>Dog Walking</option>
                    <option>Walking</option>
                    <option>Running</option>
                    <option>Cycling</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="distance">Distance Travelled (in KM's)</label>
                <input type="text" class="form-control" id="distance" name="distance" value="<?php echo isset($_POST["distance"]) ? $_POST["distance"] : ''; ?>">
            </div>

            <div class="form-group col-md-6">
                <label for="time">Time Travelled</label>
                <input type="text" class="form-control" id="time" name="time" placeholder="HR:MM" value="<?php echo isset($_POST["time"]) ? $_POST["time"] : ''; ?>">
            </div>
        </div>

        <div class="form-row">
            <h4>Vital Information</h4>
            <!-- Inputs for vitals -->
            <div class="form-group col-md-6">
                <label for="weight">Weight (in KG's)</label>
                <input type="text" class="form-control" id="weight" name="weight" value="<?php echo isset($_POST["weight"]) ? $_POST["weight"] : ''; ?>">
            </div>

            <div class="form-group col-md-4">
                <label for="age">Age</label>
                <!-- This is readonly as the user's age is automatically set by the JSON file -->
                <input type="text" class="form-control" id="age" name="age" value="<?php echo $age; ?>" readonly>
            </div>

            <div class="form-group col-md-2">
                <label for="bmi"><a href="healthdiary.php#container" target="_blank">BMI</a></label>
                <input type="text" class="form-control" id="bmi" name="bmi" value="<?php echo isset($_POST["bmi"]) ? $_POST["bmi"] : ''; ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="dailygoal">Daily Distance Goal (in KM's)</label>
                <input type="text" class="form-control" id="dailygoal" name="dailygoal" value="<?php echo isset($_POST["dailygoal"]) ? $_POST["dailygoal"] : ''; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="caloriesburned">Calories Burned</label>
                <input type="text" class="form-control" id="caloriesburned" name="caloriesburned" value="<?php echo isset($_POST["caloriesburned"]) ? $_POST["caloriesburned"] : ''; ?>">
            </div>
        </div>
        <div class="form-group col-md-2">
            <br><button type="submit" class="btn btn-primary" id="exerciseSubmit" name="exerciseSubmit">Submit</button>
        </div>
    </form>
    </div>
    </div>

    <!-- Clear Style -->
    <div style="clear:both"></div>

    <!-- Clear Style -->
    <div style="clear:both"></div>

    <!-- Output (Exercise)-->
    <div style="display: block" name="exerciseoutput" id="exerciseoutput">
        <h3 class="text-center">Today's Logbook Data</h3>
        <h4 class="text-center"><?php echo $successMessage; ?></h4>
        <hr>
        <h4 class="text-center">Your logbook data has been used to generate a <a href="results.php">personalised workout plan</a>, check it out!</h4>
        <div class="modal-body row">

            <div class="col-md-6">
                <div>
                    <!-- Output today's exercise -->
                    <img src="../a2/assets/ExerciseIcon.png" ALIGN="left" width="150" height="150">
                    <h4>Exercise</h4>
                    <p>Today's exercise was: <strong><?php echo isset($_POST["exerciseType"]) ? $_POST["exerciseType"] : ''; ?></strong></p>
                    <p>Last exercise was: <strong><?php echo $lastExercise ?></strong></p>
                </div>

                <div style="clear:both"></div>
                <hr>

                <div>
                    <!-- Output today's recorded weight -->
                    <img src="../a2/assets/WeightIcon.png" ALIGN="left" width="150" height="150">
                    <h4>Weight</h4>
                    <p>Today's recorded weight is: <?php echo isset($_POST["weight"]) ? $_POST["weight"] : ''; ?> KG</p>
                    <p>Keep an eye on your weight to ensure you stay within a healthy range.</p>
                    <p>Last recorded weight was: <strong><?php echo $lastWeight ?> KG</strong></p>
                </div>

                <div style="clear:both"></div>
                <hr>

                <div>
                    <!-- Output today's recorded BMI -->
                    <img src="../a2/assets/BMIIcon.png" ALIGN="left" width="150" height="150">
                    <h4>BMI</h4>
                    <p>Today's recorded BMI is: <?php echo isset($_POST["bmi"]) ? $_POST["bmi"] : ''; ?></p>
                    <p>Your <a href="healthdiary.php#container" targer="_blank">BMI</a> indicates that you are: <?php echo $BMIAdvice; ?></p>
                    <p>Last recorded BMI was: <strong><?php echo $lastBMI ?></strong></p>
                </div>

            </div>

            <div class="col-md-6">
                <div>
                    <!-- Output the amount of time exercised today -->
                    <img src="../a2/assets/TimeIcon.png" ALIGN="left" width="150" height="150">
                    <h4>Time Travelled</h4>
                    <p>Today's workout you exercised for: <?php echo isset($_POST["time"]) ? $_POST["time"] : ''; ?> (hours:minutes).</p>
                    <p>Last time you exercised for: <strong><?php echo $lastTimeTravelled ?> (hours:minutes).</strong></p>
                </div>

                <div style="clear:both"></div>
                <hr>

                <div>
                    <!-- Output the distance travelled for today's exercise -->
                    <img src="../a2/assets/TravelIcon.png" ALIGN="left" width="150" height="150">
                    <h4>Distance Travelled</h4>
                    <p>Today's workout you travelled for: <?php echo isset($_POST["distance"]) ? $_POST["distance"] : ''; ?> KM's.</p>
                    <p>Last time you travelled for: <strong><?php echo $lastDistanceTravelled ?> KM's.</strong></p>
                </div>

                <div style="clear:both"></div>
                <hr>

                <div>
                    <!-- Output the new daily distance goal -->
                    <img src="../a2/assets/GoalIcon.png" ALIGN="left" width="150" height="150">
                    <h4>Daily Distance Goal</h4>
                    <p>Your daily distance goal is: <?php echo isset($_POST["dailygoal"]) ? $_POST["dailygoal"] : ''; ?> KM's.</p>
                    <p>Today you travelled: <?php echo isset($_POST["distance"]) ? $_POST["distance"] : ''; ?> KM's.</p>
                    <p><?php echo $distanceAdvice; ?></p>
                    <p>Your last distance goal set was: <strong><?php echo $lastDistanceGoal ?> KM's.</strong></p>
                </div>


            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php
    require_once '../a2/includes/myFitness Footer.php';
    ?>

</body>

</html>