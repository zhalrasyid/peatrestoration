<html>
	<head>
		<title>View Data [table-name]</title>
		<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
		<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
		<style>
			#map{ width: 100%; height: 100%; }
		</style>
	</head>
	<body>

		<div id="map"></div>

		<script>
			var map = L.map('map').setView([-8.5830144,115.9928033], 10);

			var map1 = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
				attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
			}).addTo(map);
			
			var map2 = L.tileLayer.wms('http://localhost:8080/geoserver/mit/wms',{
				layers: 'mit:[table-name]',
				transparent: true,
				format: 'image/png'
			}).addTo(map);
		</script>
	</body>
</html>
