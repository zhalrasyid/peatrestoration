<html>
	<head>
		<title>View SHRIMP Map</title>
		<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
		<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
		<style>
			#map{ width: 1800px; height: 900px; }
		</style>
	</head>
	<body>

		<div id="mapView"></div>

		<script>
			var map = L.map('mapView').setView([-8.5830144,115.9928033], 10);

			var map1 = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
				attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
			}).addTo(map);
			
			var map2 = L.tileLayer.wms('http://localhost:8080/geoserver/SHRIMP/wms',{
				layers: 'SHRIMP:shp0_lakes',
				transparent: true,
				format: 'image/png'
			}).addTo(map);
			
			var map3 = L.tileLayer.wms('http://localhost:8080/geoserver/SHRIMP/wms',{
				layers: 'SHRIMP:shp0_roads',
				transparent: true,
				format: 'image/png'
			}).addTo(map);
			
			var baseLayers = {
				"Base Layers": map1
			};
			
			var shrimps ={
				"Lakes": map2,
				"Roads": map3
			}
			
			var shrimps2 ={
				"Lakes": map2,
				"Roads": map3
			}
			
			L.control.layers(shrimps, shrimps2).addTo(map);
			
		</script>
	</body>
</html>
