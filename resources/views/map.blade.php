<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>Sample_GoogleMap</title>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyC2ESS8ztDAAxpYZDfxulply5HeSti6cNA&language=ja"></script>

<style>
html { height: 100% }
body { height: 100% }
#map { height: 100%; width: 100%}
</style>
</head>

<body>
<div id="map"></div>

<script>
var MyLatLng = new google.maps.LatLng(35.6811673, 139.7670516);
var Options = {
 zoom: 15,      //地図の縮尺値
 center: MyLatLng,    //地図の中心座標
 mapTypeId: 'roadmap'   //地図の種類
};
var map = new google.maps.Map(document.getElementById('map'), Options);
</script>

</body>
</html>
