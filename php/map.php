<?php







?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>track your product</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
        <style class="bg-warning">
            #map { height: 100vh; }
        </style>
    </head>

    <body class="bg-warning">
        <div class="row">
            <button href= "dashboard.php">go back to dashboard</button>
        </div>
        <!-- The div element with ID of  gnssData, where our position details will be shown-->
        <div id="gnssData"></div>
        <!-- The div element with ID of  map, where our map will be shown-->
        <div id="map"></div>
    </body>

    <script>
        //By default, accuracy is set to low. But we can change it to high by setting geolocation options.
        var geoOps = {
            enableHighAccuracy: true,
            timeout: 10000 //10 seconds
        };

        //The div element unto which the map will be drawn.
        const gnssDiv = document.getElementById("gnssData");

        //Set up the leaflet map
        const map = L.map("map").setView([44, -79], 9); // Toronto area set as default
        const osmTileLayer = L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        const layerGpsGroup = L.layerGroup().addTo(map);

        /*When this function executes successfully, successCallback method is called.
        *If the function fails, errorCallback method is called.
        */
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback, geoOps);

        /*successCallback accepts a position object as a parameter.*/
        function successCallback(position) {
           //Get the date from Geolocation return object (position)
           const date = new Date(position.timestamp);

           /* Get the lat, long, accuracy from Geolocation return (position.coords)
            * This is a short hand for the following:
              * lattitude = position.coords.latitude
              * longitude = position.coords.longitude
              * accuracy = position.coords.accuracy
           */
           const {latitude, longitude, accuracy} = position.coords;

           // Add details to the div element
           gnssDiv.innerHTML = `Date: ${date}
                                <br>Latitude: ${latitude.toFixed(5)}
                                <br>Longitude: ${longitude.toFixed(5)}
                                <br>Accuracy: ${accuracy}`;
            
            const radius = accuracy/2;

            layerGpsGroup.clearLayers();

            //Zoom to the location
            map.setView([latitude, longitude], 12);

            //Add a marker and radius based on accuracy to map 
            L.marker([latitude,longitude]).addTo(layerGpsGroup)
                .bindPopup(`Lat/Long : ${latitude.toFixed(5)}, ${longitude.toFixed(5)}`)
                .openPopup();
            L.circle([latitude,longitude], radius).addTo(layerGpsGroup);

        }

        /*errorCallback accepts an error object as a parameter.*/
        function errorCallback(error) {
            var errorType = {
                0: "Unknown error",
                1: "Permission denied by user",
                2: "Position is not available",
                3: "Request timed out"
            };
            var errorMessage = errorType[error.code];
            if (error.code == 0 || error.code == 2) {
                errorMessage = errorMessage + " " + error.message;
            }
            console.warn("Error: " + errorMessage);
        }


    </script>
</html>