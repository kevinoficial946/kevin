
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/lunaradio-sincors.js"></script>

<div style="position:absolute;overflow:hidden;width:100%;height:100%;top:0;left:0;z-index:2">
 <video autoplay="true" muted="true" loop="true">
  <source src="js/rf.mp4" type="video/mp4">
 </video>
</div>

<div id="lunaradio" style="width:100%;height:100%;position:absolute;left:0px;top:0px;z-index:300;overflow:hidden;display:block">Cargando ...</div>

<!-- <div id="lunaradio" style="width:100%; height:600px;background: #000000 url(https://i.imgur.com/CTQdbqh.jpg) bottom / cover no-repeat;">Cargando ...</div> -->	

<script>
 jQuery(document).ready(function($) {
	$("#lunaradio").lunaradio({
		token: "",
		userinterface: "big",
		backgroundcolor: "",
		fontcolor: "#ffffff",
		hightlightcolor: "#fa225b",
		fontname: "",
		googlefont: "",
		fontratio: "0.4",
		radioname: "Studio Bala",
		scroll: "true",
		coverimage: "js/logo.jpg",
		onlycoverimage: "true",
		coverstyle: "circle",
		usevisualizer: "fake",
		visualizertype: "",
		multicolorvisualizer: "false",
		color1: "#e66c35",
		color2: "#d04345",
		color3: "#85a752",
		color4: "#067dcc",
		visualizeropacity: "0.4",
		itunestoken: "1000lIPN",
		metadatatechnic: "stream-icy-meta",
		ownmetadataurl: "",
		streamurl: "http://stream.zeno.fm/",
		streamtype: "icecast2",
		icecastmountpoint: "eua53eq57p8uv",
		radionomyid: "",
		radionomyapikey: "",
		radiojarid: "",
		radiocoid: "",
		shoutcastpath: "/chillout.mp3?type=http&nocache=377274",
		shoutcastid: "1",
		streamsuffix: "",
		metadatainterval: "1",
		volume: "50",
		debug: "false",
		autoplay: "true",
		displayliveicon: "true",
		displayvisualizericon: "true",
	usestreamcorsproxy: "true", 
	corsproxy: "",
	});
});
</script>