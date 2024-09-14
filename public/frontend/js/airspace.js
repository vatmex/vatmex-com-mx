$(document).ready( function () {
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ3VzdGF2b3ZhdG1leCIsImEiOiJjbTExOTkzdDYwcHFvMmlxODBheWlid2VyIn0.ogGdeDCFG3d-fi8J76ylAg';
    const map = new mapboxgl.Map({
        container: 'map',
        center: [-101, 22],
        zoom: 3.8,
        style: 'mapbox://styles/mapbox/light-v11',
        projection: 'mercator',
        cooperativeGestures: true
    });

    map.on('load', () => {
        map.addControl(new mapboxgl.FullscreenControl());

        map.addSource('mmid-acc', {
            'type': 'geojson',
            'data': 'https://raw.githubusercontent.com/vatmex/mmfr-geojson/main/MMID/Sectors/Combined.json'
        });

        map.addLayer({
            'id': 'mmid-acc-layer',
            'type': 'fill',
            'source': 'mmid-acc',
            'layout': {},
            'paint': {
                'fill-color': '#13437C', // blue color fill
                'fill-opacity': 0.5
            }
        });

        map.addSource('mmmx-acc', {
            'type': 'geojson',
            'data': 'https://raw.githubusercontent.com/vatmex/mmfr-geojson/main/MMEX/Sectors/Combined.json'
        });

        map.addLayer({
            'id': 'mmmx-acc-layer',
            'type': 'fill',
            'source': 'mmmx-acc',
            'layout': {},
            'paint': {
                'fill-color': '#13437C', // blue color fill
                'fill-opacity': 0.5
            }
        });

        map.addSource('mmty-acc', {
            'type': 'geojson',
            'data': 'https://raw.githubusercontent.com/vatmex/mmfr-geojson/main/MMTY/Sectors/Combined.json'
        });

        map.addLayer({
            'id': 'mmty-acc-layer',
            'type': 'fill',
            'source': 'mmty-acc',
            'layout': {},
            'paint': {
                'fill-color': '#13437C', // blue color fill
                'fill-opacity': 0.5
            }
        });

        map.addSource('mmzt-acc', {
            'type': 'geojson',
            'data': 'https://raw.githubusercontent.com/vatmex/mmfr-geojson/main/MMZT/Sectors/Combined.json'
        });

        map.addLayer({
            'id': 'mmzt-acc-layer',
            'type': 'fill',
            'source': 'mmzt-acc',
            'layout': {},
            'paint': {
                'fill-color': '#13437C', // blue color fill
                'fill-opacity': 0.5
            }
        });

        map.addSource('mmid-tmas', {
            'type': 'geojson',
            'data': 'https://raw.githubusercontent.com/vatmex/mmfr-geojson/main/MMID/TMAs/Combined.json'
        });

        map.addLayer({
            'id': 'mmid-tmas-layer',
            'type': 'line',
            'source': 'mmid-tmas',
            'layout': {},
            'paint': {
                'line-color': '#0E3058',
                'line-width': 1
            }
        });

        map.addSource('mmmx-tmas', {
            'type': 'geojson',
            'data': 'https://raw.githubusercontent.com/vatmex/mmfr-geojson/main/MMEX/TMAs/Combined.json'
        });

        map.addLayer({
            'id': 'mmmx-tmas-layer',
            'type': 'line',
            'source': 'mmmx-tmas',
            'layout': {},
            'paint': {
                'line-color': '#0E3058',
                'line-width': 1
            }
        });

        map.addSource('airports', {
            'type': 'geojson',
            'data': 'https://raw.githubusercontent.com/vatmex/mmfr-geojson/main/Airports.json'
        })

        map.addLayer({
            'id': 'airports-layer',
            'type': 'circle',
            'source': 'airports',
            'paint': {
                'circle-color': '#00ED4F',
                'circle-radius': 5,
                'circle-stroke-width': 1,
                'circle-stroke-color': '#009431'
            }
        });

        map.on('click', 'airports-layer', (e) => {
            // Copy coordinates array.
            const coordinates = e.features[0].geometry.coordinates.slice();
            const popupData = e.features[0].properties.popup;

            // Ensure that if the map is zoomed out such that multiple
            // copies of the feature are visible, the popup appears
            // over the copy being pointed to.
            if (['mercator', 'equirectangular'].includes(map.getProjection().name)) {
                while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                    coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                }
            }

            new mapboxgl.Popup({
                'maxWidth': '450px'
            })
                .setLngLat(coordinates)
                .setHTML(popupData)
                .addTo(map);
        });

        // Change the cursor to a pointer when the mouse is over the places layer.
        map.on('mouseenter', 'airports-layer', () => {
            map.getCanvas().style.cursor = 'pointer';
        });

        // Change it back to a pointer when it leaves.
        map.on('mouseleave', 'airports-layer', () => {
            map.getCanvas().style.cursor = '';
        });
    });
});
