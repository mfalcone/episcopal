









  



var centroCoordsX = -34.00414833926068;
var centroCoordsY = -61.605723766326896;
var markerCoordsX = -34.00414833926068;
var markerCoordsY = -61.605723766326896;
var bgColorMap= "#fff";
var imageMarker = '';
var zoomNum = 15;
var panControl	=	true;

jQuery(document).ready(function(){
	initializeMap();
});

function initializeMap(){
	var zoom = zoomNum;
	var markerMyLatlng = new google.maps.LatLng(centroCoordsX,centroCoordsY);
	var centroMyLatlng = new google.maps.LatLng(markerCoordsX, markerCoordsY);
	var options = {
		mapTypeId: google.maps.MapTypeId.ROADMAP
		//mapTypeIds: [ 'Styled']
		,center:centroMyLatlng
		,zoom:zoom 
		,disableDefaultUI: true
		,scrollwheel: false	
	    ,panControl				:	panControl
		,streetViewControl		:	false
        ,scaleControl			: 	false
		,zoomControl			: 	true
		,backgroundColor  		: 	bgColorMap
        ,zoomControlOptions		:	{ style: google.maps.ZoomControlStyle.SMALL, position: google.maps.ControlPosition.TOP_RIGHT }
	};
	
	var div = document.getElementById('map_canvas');
	var map = new google.maps.Map(div, options);
	var marker = new google.maps.Marker({
		position 	: 	markerMyLatlng
		,map 		: 	map
		,animation 	: 	google.maps.Animation.DROP
		,icon		: 	imageMarker
	});
	var styles = [
		{
			featureType: 'road.highway',
			elementType: 'all',
			stylers: [
				{ hue: '#FFA420' },
				{ saturation: 100 },
				{ lightness: -12 },
				{ visibility: 'on' }
			]
		},{
			featureType: 'administrative.country',
			elementType: 'geometry',
			stylers: [
				{ hue: '#fa961a' },
				{ saturation: 90 },
				{ lightness: -20 },
				{ visibility: 'on' }
			]
		},{
			featureType: 'administrative.province',
			elementType: 'labels',
			stylers: [
				{ hue: '#fa961a' },
				{ saturation: 90 },
				{ lightness: -20 },
				{ visibility: 'on' }
			]
		},{
			featureType: 'administrative.province',
			elementType: 'geometry',
			stylers: [
				{ hue: '#fa961a' },
				{ saturation: 96 },
				{ lightness: 6 },
				{ visibility: 'on' }
			]
		},{
			featureType: 'administrative.country',
			elementType: 'labels',
			stylers: [
				{ hue: '#fa961a' },
				{ saturation: 96 },
				{ lightness: 6 },
				{ visibility: 'on' }
			]
		},
		{
			featureType: 'poi.business',
			elementType: 'labels',
			stylers: [
				{ hue: '#ffffff' },
				{ saturation: -100 },
				{ lightness: 100 },
				{ visibility: 'simplified' }
			]
		},
		{
		featureType: 'road',
		elementType: 'labels',
		stylers: [
			{ hue: '#333333' },
			{ saturation: -100 },
			{ lightness: -80 },
			{ visibility: 'off' }
		]
	}
	];
	map.setOptions({styles: styles});

	//google.maps.event.addListener(map, 'zoom_changed',zoom_changed);
	
	google.maps.event.addListener(map, 'dragend',center_changed);

	map.setCenter(marker.getPosition());

	function center_changed() {
		//jQuery('.datos_mapa').fadeOut(300);
		//jQuery('.test').text('center' + map.center);
	}

	function zoom_changed() {
		//jQuery('.datos_mapa').fadeOut(300);
		//jQuery('.test').text('zoom ' + map.zoom);
	}
	
	
	function incrementar_zoom(){
		if(zoom !=8){
			zoom = zoom +2;
			map.setZoom(zoom);
			cargando();
		}else{
			//jQuery('.datos_mapa').fadeIn();
		}
	}
}