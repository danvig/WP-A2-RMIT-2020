<!DOCTYPE html>
<html lang="en">
<!-- Updated with new section to introduce myFitness
as well as include the Header/Menu Bar, Slideshow and Footer through PHP includes files -->

<head>

    <meta charset="UTF-8">
    <title>ABC Online Exercise</title>
    <!-- Import Stylesheet -->
    <link rel="stylesheet" href="../a2/css/a2site.css">

</head>

<body>

    <!-- Header -->
    <?php
        require_once '../a2/includes/homeheader.php';
    ?>

    <!-- Header Slideshow -->
    <a href="index.php">
        <div class="slider">

        </div>
    </a>

    <!-- About Section -->
    <div id="container">
        <center>
            <h3>Welcome to the Adrenaline Buzz Club</h3>
            <img src=../a2/assets/Dumbbell-Icon.png alt="Dumbbell Icon" width="200" height="200">
            <hr>
        </center>
        <br>
        <left>

            <p>We are a prominent workout and training centre located in the City of Casey in Melbourne, Victoria and
                have been established for more than 20 years. We pride ourselves on being a "no-frills workout space",
                not focusing on the luxuries of major gyms, rather focusing on our customers and helping them achieve
                their fitness goals and to work together with each other to support each other.</p>
            <p>We seek to work together with our clients to achieve the best possible results in any particular fitness
                circumstance. We strive to build long term relationships and honour our commitments with our customers,
                offering fitness <a href="services.php">services</a> of varying types.</p>
            <p>Our customers best interests are first and foremost and being at the forefront of our minds as we provide
                a tailored, personal and exclusive experience. We can adapt for any client of any fitness level and work
                with them to design a personalised workout plan along with nutritionist services, yoga classes, and
                personal training. Our customers value our services and ability to meet expectations.</p>

            <h4>MISSION STATEMENT</h4>
            <p>We pride ourselves on focusing on our customers' needs and strive to provide an exceptional,
                high-quality, experience. Our services include:</p>
            <p> <a href="services.php#container3">24/7 ACCESS</a> | <a href="services.php#container">ONLINE
                    CONSULTATIONS & TRAINING</a> | <a href="services.php#container4">PERSONAL TRAINING</a> | <a
                    href="services.php">YOGA</a> | <a href="services.php">NUTRITIONIST SERVICES</a> | <a
                    href="services.php">GROUP FITNESS</a> | <a href="myfitness.php">myFitness</a></p></p>
        </left>
    </div>
    <div style="clear: both"></div>
    <!-- Alert to Customers for Online Training -->
    <div id="container3">
        <br>
        <h1>WE'RE STILL ACTIVE</h1>
        <p>We understand that the current crisis in our world means our services can't be physically accessed at this
            time. It's because
            <br> of this that we are switching to online training. All members, new and current have access to these
            services. <br> Members should contact their personal trainer
            to organise their online training sessions. Online services include training <br> sessions via Zoom and
            weekly mental health check-ins with our mental health
            professionals.</p>
        <a href="services.php" class="joinButton">Learn More</a>
    </div><br>

    <!-- Offered Services Column -->
    <center>
        <div class="row">
            <h2>Our Services</h2>
            <div class="column">
                <h3>24/7 Facility</h3><br>
                <center><img src=../a2/assets/Clock-Icon.png alt="Twenty-Four Seven" width="128" height="128"></center>
                <!-- Icon made by Icon King from www.freeicon.io and is available for free use. -->
                <p>Our facilities are monitored physically and electronically 24 hours a day, seven days a week so you
                    know you’ll be safe whenever you step foot onto the premises. The facilities are only accessible to
                    members and staff with their identifiable electronic swipe card and security guards are on-site
                    24/7. Our gym can be accessed at any time and those who are not members of the club can only be
                    granted access to the building after being identified by on-site staff. <a href="services.php">See
                        more</a></p>
            </div>
            <div class="column">
                <h3>Online Consultation</h3><br>
                <center><img src=../a2/assets/Computer-Icon.png alt="Online Consultation" width="128" height="128">
                </center>
                <!-- Icon made by www.wishforge.games from www.freeicon.io and is available for free use. -->
                <p>The current crisis in our world means our services can’t be used physically at this time. Which is
                    why we are offering all new and current customers the opportunity to receive online consultation and
                    training plans that can be undertaken in the comfort of your own home. Members should contact their
                    personal trainer to organise their online training sessions. Additional services include live
                    training sessions via Zoom video call and weekly mental health check-ins with our trainer
                    professionals. <a href="services.php">See more</a></p>
            </div>
            <div class="column">
                <h3>Personal Training</h3><br>
                <center><img src=../a2/assets/Exercise-Icon.png alt="Personal Training" width="128" height="128">
                </center>
                <!-- Icon made by Shabna Ashraf from www.freeicon.io and is available for free use under Creative Commons 3.0. -->
                <p>As well as unlimited access to our training facility, members also have the choice to sign with a
                    personal trainer who will work with them weekly to attain their fitness goals. Trainers will work
                    with clients to create a personalised fitness plan. Our personal training services are one-on-one
                    and goal oriented to help you reach your fitness goals faster. Our trainers will keep you motivated,
                    improve your fitness regime, and ensure every workout counts. <a href="services.php">See more</a>
                </p>
            </div>

        </div>

        <!-- myFitness -->
        <div id="container">
            <a href="myfitness.php"><img src="../a2/assets/myFitness Logo.png"></img></a>
            <hr>
            <p><a href="myfitness">myFitness</a> is an exercise logbook service available to members of the Adrenaline Buzz Club. Users have the option to register <br>
            for an account and access our service with their personal login credentials and they then have the ability to record various <br> exercise and workout data
            that is stored securely on our systems.</p>
            <p>myFitness is a registered subsidiary of the Adrenaline Buzz Club. &copy 2020</p>

            <p> <a href="join.php">JOIN MYFITNESS</a> | <a href="login.php">LOGIN</a> | <a href="myfitness">MYFITNESS HOME PAGE</a> </p>
        </div>

    </center>

    <!-- Footer -->
    <div style="clear: both"></div>
    <?php
        require_once '../a2/includes/footer.php';
    ?>
</body>

</html>

<!-- Image References -->
<!--
Slider Photos
Running up steps: https://unsplash.com/photos/PHIgYUGQPvU
Online exericise: https://unsplash.com/photos/qa1wvrlWCio
Yoga: https://unsplash.com/photos/gJtDg6WfMlQ
Grass walking: https://unsplash.com/photos/ljoCgjs63SM

Icons
Training Icon
Icon made by Shabna Ashraf from www.freeicon.io and is available for free use under Creative Commons 3.0.

Clock Icon
Icon made by Icon King from www.freeicon.io and is available for free use.

Computer Icon
Icon made by www.wishforge.games from www.freeicon.io and is available for free use.

Email
Icon made by Icon King from www.freeicon.io and is available for free use.

Location
Icon made by www.wishforge.games from www.freeicon.io and is available for free use.

Phone
Icon made by Icon King from www.freeicon.io and is available for free use.

Other Photos
Personal Training
Photo by Jonathan Borba on Unsplash
-->