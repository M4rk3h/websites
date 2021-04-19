<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include the head info from a PHP file -->
    <?php include 'php/ohead.php';?>
</head>
<body>
    <!-- Include the nav bar from a PHP file -->
    <?php include 'php/nav.php';?>
    <!-- Include the nav bar from a PHP file -->
    <?php include 'php/jumbo.php';?>
    <div class="centered">
        <p>OpenLayers 4 - Click The E to Zoom!
        References <a target="_blank" href="https://openlayers.org/en/v4.6.5/examples/navigation-controls.html?q=image+layer">Zoom</a> </p>
        <div id="map" class="map" style="height:400px; width:100%;">
        </div>
        <!-- Include the nav buttons -->
        <?php include 'php/obuttons.php';?>
    </div>
    <!-- Old OpenLayers JS -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList">
    </script>
    <!-- OpenLayers JS -->
    <script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>
    <script>
        openLayersThree();
    </script>
</body>
</html>