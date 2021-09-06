<!DOCTYPE html>
<html>
<!-- Updated to remove JavaScript validation and validation occurs via PHP -->

<head>
    
    <meta charset = "UTF-8">
    <title>ABC Online Exercise | Join Now</title>
    <!-- Import Stylesheets -->
    <link rel="stylesheet" href="../a2/css/a2site.css">
    
    <link rel="stylesheet" href="../a2/css/regForm.css">

    <!-- Style for Error Messages -->
    <style>
        .error {color: #FF0000;}
    </style>

</head>

<body>
    <!-- Header from PHP Includes -->
    <?php
        require_once '../a2/includes/header.php';
    ?>
    
    
    <!-- Header Slideshow from PHP File -->
    <?php
        require_once '../a2/includes/slideshow.php';
    ?>

    <!-- PHP Validation -->
    <?php
    // I got tips for my Regular Expression from this article: "https://stackoverflow.com/questions/19605150/regex-for-password-must-contain-at-least-eight-characters-at-least-one-number-a"
    // But didn't directly copy anything.
    $passwordpattern = '/^\p{Lu}(?=[^!^&]*[!^&]).{4,}\d$/'; // Regular Expression for password validation

    // Clearing Errors
    $firstnameErr = $lastnameErr = $emailErr = $passwordErr = $ageErr = $referralErr = $formErr = '';

    // Validating Inputs
    // Upon submission
    if(isset($_POST["submit"]))
    {
      // First Name Validation
      if(empty($_POST["firstname"])) // If the firstname field is empty
      {
        $firstnameErr = "Required: Enter your first name";
        $firstname = "";
      }
      else if(!preg_match("/^[a-zA-Z ]*$/", $_POST["firstname"])) // If it doesn't only contain letters and whitespace
      {
        $firstnameErr = "Only Letters and whitespace allowed";
        $firstname = "";
      }
      else
      {
        $firstname = $_POST["firstname"]; // If the name is valid, save it to a variable
      }

      // Last Name Validation
      if (empty($_POST["lastname"]))
      {
        $lastnameErr = "Required: Enter your last name";
        $lastname = "";
      }
      else if(!preg_match("/^[a-zA-Z ]*$/", $_POST["lastname"]))
      {
        $lastnameErr = "Only letters and whitespace allowed";
        $lastname = "";
      }
      else
      {
        $lastname = $_POST["lastname"];
      }

      // Email Validation
      if (empty($_POST["email"])) // If no email is entered
      {
        $emailErr = "Required: Please enter your email";
        $email = "";
      }
      else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  // If it does not match a valid email format
      {  
           $emailErr = "<p>Invalid Email format</p>";
           $email = "";  
      }
      else
      {
        $email = $_POST["email"]; // If email is valid, save to variable
      }

      // Password Validation
      if (empty($_POST["password"]))
      {
        $passwordErr = "Required: Please enter a valid password";
        $password = "";
      }
      else
      {
        if (!preg_match($passwordpattern, $_POST["password"]))  // If password does not meet the requirements
        {
          $passwordErr = "Your password does not meet the requirements";
          $password = "";
        }
        else
        {
          $password = $_POST["password"]; // If password is valid, save to variable
        }
      }

      // Address Validation
      if (empty($_POST["w3review"]))
      {
        $address = "Address Not Provided";
      }
      else
      {
        $address = $_POST["w3review"];
      }

      // Membership Validation - Does not need proper validation as there are only two options and one is automatically selected
      $membershipDuration = $_POST["membershipduration"];

      // Age Validation
      if ($_POST["age"] < 16 || $_POST["age"] > 90)
      {
        $ageErr = "Customers must be aged between 16 and 90";
        $age = "";
      }
      else
      {
        $age = $_POST["age"];
      }

      // Referral Validation
      // If both options are selected
      if (isset($_POST["referralyes"]) && isset($_POST["referralno"]))
      {
        $referralErr = "Only one option can be selected.";
        $referral = "";
      }
      // If only "yes" is selected
      else if (isset($_POST["referralyes"]) && empty($_POST["referralno"]))
      {
        $referral = $_POST["referralyes"];
      }
      // If only "no" is selected
      else if (isset($_POST["referralno"]) && empty($_POST["referralyes"]))
      {
        $referral = $_POST["referralno"];
      }
      // If neither option is chosen
      else if (empty($_POST["referralyes"]) && empty($_POST["referralno"]))
      {
        $referralErr = "Please select a referral option";
        $referral = "";
      }

      // Save to JSON
      if ($firstname != "" && $lastname != "" && $email != "" && $password != "" && $referral != "" && $age != "")
      {
        // Call JSON file and create new array
        $file = ('../a2/data/users.json');
        $arr = array();

        // Save Form Data to Array
        $newlogin = array (
          'FirstName' => $firstname,
          'LastName' => $lastname,
          'Email' => $email,
          'Password' => $password,
          'Address' => $address,
          'Length' => $membershipDuration,
          'Age' => $age,
          'Referral' => $referral
        );

        // Get data from existing JSON file and apend file with new data
        $existingdata = file_get_contents($file);
        $arr_data = json_decode($existingdata, true);
        array_push($arr_data, $newlogin);
        $existingdata = json_encode($arr_data, JSON_PRETTY_PRINT);
        file_put_contents($file, $existingdata);
        
        // Take the user to a login page
        header('Location: login.php');
        
      }
      else
      {
        // If something does not match, then warn the user
        $formErr = "Check all required fields and try again";
      }
    }
    // End PHP
    ?>

    <!-- This is where page starts -->
    <div id="container">
        <center><br><img src=../a2/assets/Dumbbell-Icon.png width="300" height="300"></center>
        <center><h1><strong>Join Adrenaline Buzz Club</h1></strong>
            <p id = "new_font">Ready to join the Adrenaline Buzz Club? Use this page to secure your membership.</p>
            <p>Signing up here will also give you full access to <a href="myfitness.php">myFitness</a></p>
            <hr>
    </div>
    
    <!-- Register Form -->
    <div id="container">
    <div id="grid-container">
        <h3>Enter your Details Below</h3>
        <div><p><span class="error">* required field</span></p></div>
        <hr>
        <div><p><span class="error"><?php echo $formErr; ?></span></p></div>
        <form id="registration_form" method="POST">
            <!-- Name/Email Input -->
            <div>
            First Name:<input type="text" name = "firstname" id="firstname" value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : ''; ?>">
            <span class="error">* <?php echo $firstnameErr; ?></span>
            </div>
    
            <div>
            Last Name:<input type="text" name = "lastname" id="lastname" value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : ''; ?>">
            <span class="error">* <?php echo $lastnameErr;?></span>
            </div>

            <div>
            Email:<input type="text" name = "email" id="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
            <span class="error">* <?php echo $emailErr;?></span>
            </div>

            <div>
            Password:<br><br><input type="password" name = "password" id="password" class="password" style="width:1145px;" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>">
            <br><br><span class="error">*<?php echo $passwordErr;?></span>
            <span class="error"><br> Password must: <br> - Start with a capital letter <br> - Must have at least 6 characters <br> - One of these characters must be either !, ^, &, <br> - Must end with a number </span>
            </div><br>

            <!-- Text Area Font sourced from w3 schools -->
            <!-- Used for address -->
            <!-- https://www.w3schools.com/tags/tag_textarea.asp -->
            <div><label for="address">Address (optional):</label></div>
            <textarea id="w3review" name="w3review" rows="4" name ="address" cols="100"><?php echo isset($_POST["w3review"]) ? $_POST["w3review"] : ''; ?></textarea>
            
            <!-- Membership Duration -->
            <div><label for="membershipduration">Membership Duration: </label>
            <select id="membershipduration" name="membershipduration">
                <option value="ongoing">Ongoing</option>
                <option value="3mths">3 Months</option>
                <option value="6mths">6 Months</option>
                <option value="yearly">Yearly</option>
            </select>
            <span class="error">*</span>
            </div>

            <!-- Age Range Slider -->
            <!-- I know we were allowed to remove this, but it didn't take too much work to validate, so I decided to leave it -->
            <div>
              <label for="age">Age: </label><label id="ageOutput"></label><br><br>
              <input type="range" id="age" name="age" min="0" max="99" value="16">
              <br>
              <span class="error">* <?php echo $ageErr;?></span>
            </div>

            <script>
              // This changes the output of the age slider
              var slider = document.getElementById("age");
              var output = document.getElementById("ageOutput");
              output.innerHTML = slider.value; // Display the default slider value

              // Update the current slider value (each time you drag the slider handle)
              slider.oninput = function() {
                output.innerHTML = this.value;
              }
            </script>

            <!-- Referral Checkbox -->
            <br><br><div id="slidecontainer">
                <label for="referral"><b>Were you referred by a gym member?</b></label>
                <input type="checkbox" id="referralyes" name="referralyes" value="Yes">Yes
                <input type="checkbox" id="referralno" name="referralno" value="No">No
            </div>
            <br><span class="error">* <?php echo $referralErr;?></span>
            <hr>

            <br>
            <!-- Button for form submission -->
            <div><input type="submit" name="submit" value="Register"/></div>
            <br>
        </form>
    </div>
</div>

    <!-- Footer -->
    <div style="clear: both"></div>
    <?php
        require_once '../a2/includes/footer.php';
    ?>

</body>

</html>