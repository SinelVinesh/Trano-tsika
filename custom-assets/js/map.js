
let latInput = $("#lat"), lngInput = $("#lng");

let myStyles = [{
    "featureType": "poi.business",
    "stylers": [{
        "visibility": "off"
    }]
},
    {
        "featureType": "poi.park",
        "elementType": "labels.text",
        "stylers": [{
            "visibility": "off"
        }]
    }
];

let centerPoint = new google.maps.LatLng(-18.9152, 47.5216);

let mapOptions = {
    center: centerPoint,
    zoom: 16,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    styles: myStyles
};

let carte = new google.maps.Map(document.getElementById("map"), mapOptions);

let marker = new google.maps.Marker({
    position: centerPoint,
    draggable: true,
    map: carte
});

let placeService = new google.maps.places.PlacesService(carte);

function setHousePosition () {

    let lat = marker.getPosition().lat(),  lng = marker.getPosition().lng();

    latInput.val(lat);
    lngInput.val(lng);

    $("#link-map").modal('hide');
}

function centerToPlace(place) {

    let request = {
        query: place,
        fields: ["name", "geometry"]
    };

    placeService.findPlaceFromQuery(request, (results, status) => {
        if(status === "OK" && results) {
            let pos = results[0].geometry.location;
            carte.setCenter(pos);
            marker.setPosition(pos);
        }
    });

}

$("#location").change(() => {
    centerToPlace($("#location option:selected").text());
});

function initialize  ()  {
    console.log("map is initialized");
}

google.maps.event.addDomListener(window, 'load', initialize);
