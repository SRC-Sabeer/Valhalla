var MapsGoogle=function(){var h=function(){new GMaps({div:"#basic_gmap",lat:23.012844,lng:72.528998})},j=function(){var a=new GMaps({div:"#gmap_marker",lat:23.0196181,lng:72.528762});a.addMarker({lat:23.0196181,lng:72.528762,title:"Lima",details:{database_id:42,author:"HPNeo"},click:function(e){console.log&&console.log(e),alert("You clicked in this marker")}}),a.addMarker({lat:23.259933,lng:77.412615,title:"Marker with InfoWindow",infoWindow:{content:'<span style="color:#000">HTML Content!</span>'}}),a.setZoom(5)},g=function(){var a=new GMaps({div:"#gmap_polylines",lat:23.012844,lng:72.528998,click:function(e){console.log(e)}});path=[[23.012844,72.528998],[23.0104542,72.5297705],[23.0102172,72.5270883],[23.0090717,72.52758179999999],[23.0084989,72.5235907],[23.0080447,72.51893440000001],[23.0078077,72.5148574],],a.drawPolyline({path:path,strokeColor:"#e7505a",strokeOpacity:0.6,strokeWeight:6})},c=function(){var a=new GMaps({div:"#gmap_geo",lat:23.012844,lng:72.528998});GMaps.geolocate({success:function(e){a.setCenter(e.coords.latitude,e.coords.longitude)},error:function(e){alert("Geolocation failed: "+e.message)},not_supported:function(){alert("Your browser does not support geolocation")},always:function(){}})},b=function(){var a=new GMaps({div:"#gmap_geocoding",lat:23.012844,lng:72.528998}),e=function(){var i=$.trim($("#gmap_geocoding_address").val());GMaps.geocode({address:i,callback:function(m,l){if("OK"==l){var k=m[0].geometry.location;a.setCenter(k.lat(),k.lng()),a.addMarker({lat:k.lat(),lng:k.lng()}),App.scrollTo($("#gmap_geocoding"))}}})};$(document).on("click","#gmap_geocoding_btn",function(i){i.preventDefault(),e()}),$("#gmap_geocoding_address").keypress(function(k){var i=k.keyCode?k.keyCode:k.which;"13"==i&&(k.preventDefault(),e())})},d=function(){var a=new GMaps({div:"#gmap_polygons",lat:23.012844,lng:72.528998}),e=[[23.0116195,72.5221315],[23.0092099,72.5235478],[23.0087557,72.5197283],[23.0105727,72.51820480000001]];a.drawPolygon({paths:e,strokeColor:"#BBD8E9",strokeOpacity:1,strokeWeight:3,fillColor:"#BBD8E9",fillOpacity:0.6})},f=function(){var a=new GMaps({div:"#gmap_routes",lat:23.012844,lng:72.528998});$(document).on("click","#routes_start",function(e){e.preventDefault(),App.scrollTo($(this),400),a.travelRoute({origin:[23.012844,72.528998],destination:[23.0048648,72.50138200000001],travelMode:"driving",step:function(i){$("#routes_instructions").append("<li>"+i.instructions+"</li>"),$("#routes_instructions li:eq("+i.step_number+")").delay(800*i.step_number).fadeIn(500,function(){a.setCenter(i.end_location.lat(),i.end_location.lng()),a.drawPolyline({path:i.path,strokeColor:"#131540",strokeOpacity:0.6,strokeWeight:6})})}})})};return{init:function(){h(),j(),c(),b(),g(),d(),f()}}}();jQuery(document).ready(function(){MapsGoogle.init()});