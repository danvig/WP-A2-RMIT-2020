<!DOCTYPE html>
<html>

<!-- Updated to remove HTML validation
And include jQuery validation -->

<head>
    
    <meta charset = "UTF-8">
    <title>ABC Online Exercise | Contact Us</title>
    <!-- Import CSS -->
    <link rel="stylesheet" href="../a2/css/a2site.css">
    <link rel="stylesheet" href="../a2/css/contactForm.css">
    <link rel="stylesheet" href="../a2/css/breadcrumbs.css">

    <!-- Import jQuery and JavaScript for validating via JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src ="../a2/js/contactValidation.js"></script>

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

    <!-- Contact Hours -->
    <div id="container">
        <center><h1><strong>Contact Us</h1></strong>
            <p id = "new_font">Want to get in touch? We'd love to hear from you. Here's how you can reach us...</p>
            <hr>
            <h3 style="text-align:left;">Phone Hours <span style="float:right;"> Contact Details </span></h3>
            <p style="text-align:left;">Monday: 9AM - 5:30 PM (AEST) <span style="float:right;"> <strong>Address: </strong>15 Palm Way, Narre Warren South, VIC 3805</span><br><br>
                Tuesday: 9AM - 5:30 PM (AEST) <span style="float:right;"> <strong>Email: </strong><a href="mailto:admin@abcgym.com.au">admin@abcgym.com.au</a></span> <br><br>
                Wednesday: 9AM - 5:30 PM (AEST) <span style="float:right;"> <strong>Landline: </strong>1900 654 321</span> <br><br>
                Thursday: 9AM - 5:30 PM (AEST) <span style="float:right;"> <strong>Mobile: </strong>0491 570 110</span> <br><br>
                Friday: 9AM - 5:30 PM (AEST) <br><br>
                Saturday: After hours voice mail box <br><br>
                Sunday: After hours voice mail box
                <br><br> * Please note that our operating hours are currently <br> not in effect due to the COVID-19 Pandemic on advice from the <br> Victorian Government.
            </p>
    </div>
            <!-- Contact Form -->
            <br>
            <div id="container">
            <h3 style="text-align:left;">Contact Us</h3>
            <form action="#" id="contactus" name="contactus" method="post" enctype="text/plain">

                <div>
                <label for="fname"><strong>First Name</strong></label>
                <input type="text" id="fname" name="fname" placeholder="Your name..">
                </div><br>
            
                <div>
                <label for="lname"><strong>Last Name</strong></label>
                <input type="text" id="lname" name="lname" placeholder="Your last name..">
                </div><br>

                <div>
                <label for="email"><strong>Email</strong></label>
                <input type="text" id="email" name="email" placeholder="Your email..">
                </div><br>

                <div>
                <label for="phone"><strong>Phone</strong></label>
                <input type="text" id="phone" name="phone" placeholder="Your phone number..">
                </div><br>
            
                <div>
                <label for="enquiry"><strong>Enquiry Type</strong></label>
                <select id="enquiry" name="enquiry">
                  <option value="general">General Enquiry</option>
                  <option value="membership">New Membership</option>
                  <option value="security">Security Concern</option>
                  <option value="online">COVID Online Training</option>
                </select>
                </div><br>
            
                <div>
                <label for="subject"><strong>Subject</strong></label><br>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                </div><br>
            
                <input type="submit" value="Submit">
            
              </form>
    </div><br>

    <!-- Footer -->
    <div style="clear: both"></div>
    <?php
        require_once '../a2/includes/footer.php';
    ?>

</body>

</html>