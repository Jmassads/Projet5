/*
CARTES
*/
import {
	Map
} from './front-modules/map';

function init() {
	// Carte de Saint Germain en Laye
	// lat, lng, zoom, streetViewControl
    let map = new Map(48.8989, 2.0938, 12, false);
    map.addMap('map');
    map.addMarker('Saint Germain en Laye');
}

// Comme j'ai utilisé les modules de webpack, les scopes sont separées. J'ai attaché la fonction init à la scope globale.
window.init = init;


import {
	Timer
} from './front-modules/timer';

let timer = new Timer('.timer');
