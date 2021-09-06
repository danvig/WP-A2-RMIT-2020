// jQuery validation for contact form
$(document).ready(function() {
  $("#contactus").validate({
    // These are a set of rules for validating name, email and phone.
    rules: {
      fname : {
        required: true,
        minlength: 3
      },
      lname : {
        required: true,
        minlength: 1
      },
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true,
      },
      subject: {
        required: true,
        minlength: 3
      }
    },
    // Error messages
    messages : {
      fname: {
        minlength: "First Name should be at least 3 characters"
      },
      lname: {
        minlength: "Last Name should be at least 1 character"
      },
      email: {
        email: "The email should be in the format: abc@domain.tld"
      },
      phone: {
        
      },
      subject: {
        required: "Please enter a subject for the email"
      }
    }
  });
});