<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display a map on a webpage</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link rel="stylesheet" href="{{asset('/')}}app-assets/fonts/line-awesome/css/line-awesome.min.css" >

<style>
</style>
</head>
<body>
    <!-- &libraries=places&callback=initialize -->
    <div id="address-map-container" style="width:100%;height:400px; ">
        <div style="width: 100%; height: 100vh" id="mymap"></div>
    </div>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBS_3oAyRG-5knJxCi8k-c2vFUexyLWqvA&libraries=places&callback=initialize" async defer></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script> -->

    
    <script>
                const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';

        let labelIndex = 0;
        function myMap() {
            const myLatLng = { lat: 31.0562536, lng: 31.4301667 };
            var mapProp= {
              center:new google.maps.LatLng(31.0562536,31.4301667),
              zoom:12,
              styles: [
                    { elementType: "geometry", stylers: [{ color: "#242f3e" }] },
                    { elementType: "labels.text.stroke", stylers: [{ color: "#242f3e" }] },
                    { elementType: "labels.text.fill", stylers: [{ color: "#746855" }] },
                    {
                    featureType: "administrative.locality",
                    elementType: "labels.text.fill",
                    stylers: [{ color: "#d59563" }],
                    },
                    {
                    featureType: "poi",
                    elementType: "labels.text.fill",
                    stylers: [{ color: "#d59563" }],
                    },
                    {
                    featureType: "poi.park",
                    elementType: "geometry",
                    stylers: [{ color: "#263c3f" }],
                    },
                    {
                    featureType: "poi.park",
                    elementType: "labels.text.fill",
                    stylers: [{ color: "#6b9a76" }],
                    },
                    {
                    featureType: "road",
                    elementType: "geometry",
                    stylers: [{ color: "#38414e" }],
                    },
                    {
                    featureType: "road",
                    elementType: "geometry.stroke",
                    stylers: [{ color: "#212a37" }],
                    },
                    {
                    featureType: "road",
                    elementType: "labels.text.fill",
                    stylers: [{ color: "#9ca5b3" }],
                    },
                    {
                    featureType: "road.highway",
                    elementType: "geometry",
                    stylers: [{ color: "#746855" }],
                    },
                    {
                    featureType: "road.highway",
                    elementType: "geometry.stroke",
                    stylers: [{ color: "#1f2835" }],
                    },
                    {
                    featureType: "road.highway",
                    elementType: "labels.text.fill",
                    stylers: [{ color: "#f3d19c" }],
                    },
                    {
                    featureType: "transit",
                    elementType: "geometry",
                    stylers: [{ color: "#2f3948" }],
                    },
                    {
                    featureType: "transit.station",
                    elementType: "labels.text.fill",
                    stylers: [{ color: "#d59563" }],
                    },
                    {
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [{ color: "#17263c" }],
                    },
                    {
                    featureType: "water",
                    elementType: "labels.text.fill",
                    stylers: [{ color: "#515c6d" }],
                    },
                    {
                    featureType: "water",
                    elementType: "labels.text.stroke",
                    stylers: [{ color: "#17263c" }],
                    },
                ],
                        };
                        var map = new google.maps.Map(document.getElementById("mymap"),mapProp);
                        const image =
                        "https://maps.google.com/mapfiles/kml/shapes/bus.png";
                        new google.maps.Marker({
                        position: myLatLng,
                        map,
                        draggable: true,
                        icon : image,
                        "description": 'Vikash Rathee. <strong> This is test Description</strong>'
                           });
                const flightPlanCoordinates = [
                    { lat: 31.0562536, lng: 31.4301667 },
                    { lat: 31.0381824, lng:31.3944397 },
                ];
            const flightPath = new google.maps.Polyline({
                path: flightPlanCoordinates,
                geodesic: true,
                strokeColor: "#235c23",
                strokeWeight: 5,
            });
            
            flightPath.setMap(map);
        

        

                google.maps.event.addListener(map, "click", (event) => {
                    addMarker(event.latLng, map);
                    map.setZoom(15);
                    map.setCenter(event.latLng);

                });

                // Add a marker at the center of the map.
                 // addMarker(myLatLng, map);

        }
     

        function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        new google.maps.Marker({
            position: location,
           // label: labels[labelIndex++ % labels.length],
            map: map,
            icon: {
                parking: {
                        icon: iconBase + 'parking_lot_maps.png'
                    },
                    library: {
                        icon: iconBase + 'library_maps.png'
                    },
                    info: {
                        icon: iconBase + 'info-i_maps.png'
                    }
            } 
        });
        }

        
     </script>
            
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBS_3oAyRG-5knJxCi8k-c2vFUexyLWqvA&callback=myMap"></script>

                                                                                                       

      

</body>
</html>