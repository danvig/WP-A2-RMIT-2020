<!-- 
This is code for the searchbar of myFitness.php so a user can search for exercises
Used in the files using a PHP includes.
This also includes the container for the search bar, not just the code to generate results.
-->

<!DOCTYPE html>
<!-- This is the search bar for myFitness -->
<html lang="en">

<head>

  <meta charset="UTF-8">
  <!-- Import jQuery and Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../a2/css/search.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

  <br /><br />
  <!-- Search Bar -->
  <div class="container" style="width:900px;">
    <div align="center">
      <input type="text" name="search" id="search" placeholder="Search for Activity" class="form-control" />
    </div>
    <ul class="list-group" id="result"></ul>
    <br />
  </div>

</body>

</html>

<script>
  // This is what happens when you search for an exercise
  // Not original code, this is sourced from https://www.webslesson.info/2017/02/live-search-json-data-using-ajax-jquery.html
  // and has been modified to fit my search function
  $(document).ready(function() {
    $.ajaxSetup({
      cache: false
    });
    // When new text is entered into the search bar (keyup, next letter entered)
    $('#search').keyup(function() {
      $('#result').html(''); // This is the result that is shown in the dropdown list. For now it's blank.
      // The searchField is the text value that is put into the search bar
      var searchFieldValue = $('#search').val();
      // This creates a new expression that includes the value in the search field
      var searchExpression = new RegExp(searchFieldValue, "i");
      
      // Now that the search field has data, we search the JSON file with the list of results and find a full or partial match
      // Get data from JSON File
      $.getJSON('../a2/data/searchResults.json', function(data) {
        // Moves through the JSON file and gets the elements
        $.each(data, function(key, value) {
          // If the search expression matches an item from the JSON File
          if (value.name.search(searchExpression) != -1) {
            // Display the results in a drop down list
            $('#result').append('<li class="list-group-item link-class"><img src="' + value.image + '" height="40" width="40" class="img-thumbnail" /> ' + value.name + '</li>');
          }
        });
      });
    });

    // When an option is clicked, it takes you to the Logbook
    $('#result').on('click', 'li', function() {
      window.location.href = "logbook.php";
    });
  });
</script>