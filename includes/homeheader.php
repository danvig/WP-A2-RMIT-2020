<!DOCTYPE html>
<!-- This is the header for the index.php page. It is similar to the header for the other main pages
But this one has the weather data and saves the amount of times the API is called -->
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="../a2/css/a2site.css">

    <?php
    // Clear variables
    $currentweather = '';
    $quote = '';
    $searchLocation = 'Melbourne';

    // Call the API
    $searchQuery = http_build_query([
        'access_key' => '04c95160aa3a307e027ec4f4683fe1cd',
        'query' => $searchLocation,
    ]);

    $httpRequest = curl_init(sprintf('%s?%s', 'http://api.weatherstack.com/current', $searchQuery));
    curl_setopt($httpRequest, CURLOPT_RETURNTRANSFER, true);

    $responseData = curl_exec($httpRequest);
    curl_close($httpRequest);

    // Save the current weather data
    $result = json_decode($responseData, true);

    // Output the weather data
    $currentweather = $result['current']['temperature'];

    // Determine quote based on weather
    if ($currentweather <= 10)
    {
        $quote = 'It is only cold if you are standing still';
    }
    else if ($currentweather > 10 && $currentweather <= 15)
    {
        $quote = 'It always seems impossible until it is done';
    }
    else if ($currentweather > 15 && $currentweather <= 30)
    {
        $quote = 'Do something today that your future self will thank you for';
    }
    else if ($currentweather > 30)
    {
        $quote = 'Will it be easy? Nope. Will it be worth it? Yes!';
    }
    ?>

</head>

<body>

    <!-- Header using Canvas -->
    <header>
        <canvas id="canvas" width="640" height="100">
            <script type="text/javascript" src="../a2/js/logo.js"></script>
        </canvas>
        <p> Email: admin@abcgym.com.au | Location: Melbourne | Phone: +61 491 570 156</p>

    </header>

    <!-- Weather Output -->
    <div class="weather">
        <img src="../a2/assets/Weather-Icon.png" width=100 height=100 ALIGN="left"></img>
        <h4> Melbourne Weather</h4>
        <p> Current Weather in Melbourne: <?php echo $currentweather; ?> °C <br> "<?php echo $quote; ?>"
    </div>

    <div style="clear:both"></div>

    <?php
    require_once '../a2/includes/navbar.php';
    ?>
</body>

</html>