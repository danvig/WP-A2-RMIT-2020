<!DOCTYPE html>
<html>

<head>
    
    <meta charset = "UTF-8">
    <title>ABC Online Exercise | Health Diary</title>
    <link rel="stylesheet" href="../a2/css/a2site.css">
    <link rel="stylesheet" href="../a2/css/breadcrumbs.css">
    <link rel="stylesheet" href="../a2/css/regForm.css">

    <link rel="stylesheet" href="../a2/css/healthDiary.css">

    <script type="text/javascript" src ="../a2/js/HealthDiary.js"></script>

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
    
    <!-- Register Form -->
    <div id="container">
        <h3>Health Diary</h3>
        <p>The Adrenaline Buzz Club Health Diary is a free online tool available for site users to receive advice on their health and track their health habits.
            It has also been designed to give users a taste of the Adrenaline Buzz Club before they join our club. All tools are available for free and data is kept
            private and unaccessible except to you.
        </p>
        <hr>

        <!-- BMI Calculator -->
        <div>
        <h4>BMI Calculator</h4>
        <p>Enter your Height in CM and Weight in KG to determine your Body Mass Index (BMI)</p>
        <p>Body Mass Index (BMI) is a measurement of a person's weight with respect to his or her height. It is used as an indicator of Body Mass rather
            than a direct measurement of body fat.
        </p>
            <div>
                <label for="height">Height (CM)</label>
                <input type="text" id="height">
                <div class="error" id="heighterror"></div>
            </div>
            <br>
            <div>
                <label for="weight">Weight (KG)</label>
                <input type="text" id="weight">
                <div class="error" id="weighterror"></div>
            </div>
            <br>
            <div>
                <button id="calculateBMI" onclick="BMICalculator()">Calculate BMI</button>
            </div><br>
            <div>
                <h5 id ="BMIReport">Your Body Mass Index is: </h5>
                <h5 id="BMIOutput">Your BMI Indicates that you are: </h5>
            </div>
            <div>
                <img style="float: right; margin: 0px 0px 15px 15px;" src="../a2/assets/BMI Chart.jpg">
                <!-- Image sourced from bmicalculatorusa.com as of August 20th, 2020 -->
                <h4>Understanding your Body Mass Index</h4>
                <p>A normal BMI score is one that falls between 18.5 and 24.9. 
                This indicates that a person is within the normal weight range for his or her height. 
                A BMI chart is used to categorize a person as underweight, normal, overweight, or obese.
                <br>Please note that our BMI Calculator should not be used as an official health reference and you should contact your Doctor for official health needs
                </p>

                <h5>BMI Index</h5>
                <p>Below 18.5 - Underweight</p>
                <p>Between 18.5 and 24.9 - Healthy</p>
                <p>Between 25.0 and 29.9 - Overweight</p>
                <p>Greater than 30.0 - Obese</p>
                </p>
            </div>
            <br>
            <hr>

            <!-- Food Diary -->
            <div id="FoodDiary">
            <h4>Daily Food Diary</h4>
            <p>The Food Diary can be used to keep track of your daily eating habits. Simply enter the Meal, what you Consumed, and the amount of Calories consumed (estimated).
                <!-- Start Food Diary -->
                <div>
                    <label for="mealChoice">Meal (Breakfast, Lunch, Dinner, Snack)</label>
                    <input type="text" id="mealChoice">
                    <div class="error" id="mealError"></div>
                </div>
                <div>
                    <label for="mealConsumed">What did you eat?</label>
                    <input type="text" id="mealConsumed">
                    <div class="error" id="mealconsumedError"></div>
                </div>
                <div>
                    <label for="caloriesConsumed">Estimated Number of Calories</label>
                    <input type="text" id="caloriesConsumed">
                    <div class="error" id="caloriesconsumedError"></div>
                </div>
                <button id="saveFoodDiary" onclick="saveFoodDiary()">Save Meal Data</button>
            </p>
            </div>
            <br><hr>
        </div>

        <!-- Heartbeat Calculator -->
        <div id="hearbeatCalculator">
            <h4>Heartbeat Calculator</h4>
            <p>This can be used to determine your resting heartbeat and provide advice on whether your resting heartbeat is ideal or not.</p>
            <p>To measure your heartbeat, check your pulse at your wrist by placing two fingers between the bone and the tendon over your radial artery — which is located on the thumb side of your wrist. 
                When you feel your pulse, count the number of beats in 15 seconds. <strong>The timer below can be used to help countdown 15 seconds.</strong></p>
            <p>Once you have measured the number of beats, enter it into the text field below to see your resting heartbeat</p>
            <h5>Countdown</h5>
            <!-- Countdown -->
            <div id="heartbeatCountdown" class="heartbeatCountdown">
            <p class="countdown" id="15secondcountdown">&nbsp15 seconds remaining</p>
            <button id="startCountdown" onclick="countdownStart()">Start</button><br><br>
            </div>

            <!-- Enter Heartbeat -->
            <br>
            <div>
                <label for="heartbeatEntry">Estimated Number of Beats</label>
                <input type="text" id="heartbeatEntry">
                <div class="error" id="heartbeatEntryError"></div>
            </div>
            <button id="saveHeartbeat" onclick="heartbeatCalculation()">Enter Heartbeat</button>
            <h5 id="heartrateOutput">Your Heart Rate is: </h5>
            <h5 id="heartrateAdvice">Your Heart Rate is: </h5>
            <p>An ideal heartrate is between 60 and 100 Beats Per Minute. Numerous factors can influence your heart rate including your <strong>Age, Fitness Level, Activity Level, Smoking History, Cardiovascular disease, High cholesterol, Diabetes, Air temperature & body position.</strong>
            Please do not rely on our Heartbeat Calculator for accurate medical advice. Always consult your Doctor.</p>

            <h5>BPM Index</h5>
            <p>Below 40: Low</p>
            <p>Between 40 and 60 - Below Normal</p>
            <p>Between 60 and 100 - Normal</p>
            <p>Greater than 100 - Above Normal</p>
        </div>
        <hr>

        <!-- Sleep Tracker -->
        <div id="sleepTracker">
            <h4>Sleep Tracker</h4>
            <p>Our sleep tracker can be used to monitor the amount of time you sleep each night and can provide advice for getting more sleep at nights.</p>
            <div>
                <label for="sleepTimeEntry">Estimated Time you went to sleep</label>
                <input type="text" id="sleepTimeEntry" placeholder="Format in 24 hour time like so: '20.45'">
                <div class="error" id="sleepTimeEntryError"></div>
            </div>
            <div>
                <label for="wakeTimeEntry">What time did you wake up?</label>
                <input type="text" id="wakeTimeEntry" placeholder="Format in 24 hour time like so: '08.00'">
                <div class="error" id="wakeTimeEntryError"></div>
            </div>
            <div>
                <label for="ageBracket">Your Age Bracket: </label>
                <select id="ageBracket" name="ageBracket">
                    <option value="child">Child</option>
                    <option value="teenager">Teenager</option>
                    <option value="adult">Adult</option>
                    <option value="elderly">Elderly</option>
                </select>
            </div>
            <button id="saveSleep" onclick="sleepCalculator()">Calculate Sleep Time</button>
            <h5 id="sleepOutput">Your Total Sleep time for the night was: </h5>
            <h5 id="sleepAdvice"></h5>
        </div>
        <hr>

        <!-- Activity Tracker -->
        <div id="activityTracker">
            <h4>Activity Tracker</h4>
            <p>Use our activity tracker to keep track of your steps, KM's walked, flights climbed, and cycling distance. Import your data from an appropriate activity tracker and store them here.</p>
            <div class="error" id="activityTrackerError"></div>
            <div>
                <label for="stepTracker">Enter number of Steps Taken Today</label>
                <input type="text" id="stepTracker">
            </div>
            <div>
                <label for="KMTravelled">Enter number of KM's Travelled Today</label>
                <input type="text" id="KMTravelled">
            </div>
            <div>
                <label for="flightsClimbed">Enter number of Flights Climbed Today</label>
                <input type="text" id="flightsClimbed">
            </div>
            <div>
                <label for="cyclingDistance">Enter distance of cycling today (KM)</label>
                <input type="text" id="cyclingDistance">
            </div>
            <button id="activitySave" onclick="activityTracker()">Save Data</button>
            <h5 id="stepData"></h5>
            <h5 id="KMData"></h5>
            <h5 id="flightsData"></h5>
            <h5 id="cyclingData"></h5>
        </div>
    </div>

    <!-- Footer -->
    <div style="clear: both"></div>
    <?php
        require_once '../a2/includes/footer.php';
    ?>

</body>

</html>