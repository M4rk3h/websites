<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include the head info from a PHP file -->
    <?php include 'php/ghead.php';?>
</head>
<body>
    <!-- Include the nav bar from a PHP file -->
    <?php include 'php/nav.php';?>
    <!-- Include the nav bar from a PHP file -->
    <?php include 'php/jumbo.php';?>
    <div class="centered">
        <p>Created polygons which outline 2 places where wind farms are located.
        References: <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial">Google Doc</a></p>
        <div id="gmapWind" style="height:400px; width:100%;">
            Google Map
        </div>
        <!-- Include the google buttons -->
        <?php include 'php/gbuttons.php';?>
    </div>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=removed&callback=initMapWind">
    </script>
</body>
</html>