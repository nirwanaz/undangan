<section class="section-map">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div id="heremap" class="d-block mb-3" style="height: 500px"></div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
<script type="text/javascript">
    /**
     * Set Position On Map
     */

    function setPosition(map) {
        map.setCenter({ lat: -7.1743803, lng: 112.5847512 });
        map.setZoom(16);
    }

    function addMarkerToMap(map) {
        var destination = new H.map.Marker({ lat: -7.176829, lng: 112.584665});
        map.addObject(destination);
    }

    var H = window.H 
    // Initialize communication with the platform
    var platform = new H.service.Platform({
        apikey: 'XCYiOO-DhP1bf_Vg27ztXH8kVluIMIR9gjjEAKJJqJY'
    });
    var defaultLayers = platform.createDefaultLayers();
    
    // Initialize a map
    var map = new H.Map(
        document.getElementById('heremap'),
        defaultLayers.vector.normal.map, 
        {
            center: { lat: 50, lng: 5 },
            zoom: 4,
            pixelRatio: window.devicePixelRatio || 1
        });
    // add resize listener to make sure the map occupies the whole container
    window.addEventListener('resize', () => map.getViewPort().resize());
    // Make the map interactive
    var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

    // Create the default UI components
    var ui = H.ui.UI.createDefault(map, defaultLayers);

    // Now use the map as required...
    window.onload = function () {
        setPosition(map);
        addMarkerToMap(map);
    }
</script>
