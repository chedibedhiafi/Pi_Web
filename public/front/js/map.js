
    /*===================================================
                      GOOGLE MAP  LAYER               
===================================================*/



var map = L.map('map').setView([34.99919469665419,10.156024805970863], 5);
var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
maxZoom: 20,
subdomains:['mt0','mt1','mt2','mt3']
});
googleStreets.addTo(map);







/*===================================================
                  LAYER CONTROL               
===================================================*/


var markerGroup = L.layerGroup().addTo(map);


/*===================================================
                  Choropleth Map               
===================================================*/
function goTo(longitude,latitude){
map.flyTo([longitude,latitude],15)
}

function addMarker(longitude,latitude){

L.marker([longitude, latitude]).addTo(markerGroup);
}


let lat;
let lon;
function onClick(){

markerGroup.clearLayers();
let coords = document.getElementsByClassName("leaflet-control-mouseposition leaflet-control")[0].innerHTML.split(":");
addMarker(coords[0],coords[1]);
return document.getElementsByClassName("leaflet-control-mouseposition leaflet-control")[0].innerHTML;

}


function activateOnClick(){
var yourDiv = document.getElementById("map"); //cache your div

yourDiv.onclick = function(e) { //when you hover your div
     if (e.shiftKey){
         console.log('yazebi')
     }
 };

}