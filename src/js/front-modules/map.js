function Map(lat, lng, zoom, streetViewControl) {
	this.map = map;
	this.lat = lat;
	this.lng = lng;
	this.zoom = zoom;
	this.streetViewControl = streetViewControl;
}

// On ajoute la carte
Map.prototype.addMap = function (map_id) {

	// On instantie la classe google.maps.Map (extends MVCObject) et qui prend en parametre l'element HTML de la carte
	this.map = new google.maps.Map(document.getElementById(map_id), {
		// et on ajoute des parametres:

		// centre:
		center: {
			lat: this.lat,
			lng: this.lng
		},
        // niveau de zoom
		zoom: this.zoom,
		streetViewControl: this.streetViewControl
	});

};

Map.prototype.addMarker = function (title) {
	let marker = new google.maps.Marker({
		position: {
			lat: this.lat,
			lng: this.lng
		},
		map: this.map,
		title: title
	});
};

export {
	Map
};