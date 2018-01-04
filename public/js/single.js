// 初回起動時処理

// ピンを用意しておく
var citymap = {
    center: {lat: Number($('.single_map_area').attr('data-latitude')), lng: Number($('.single_map_area').attr('data-longitude'))},
    population: 5
};

// [Number($('.single_map_area').attr('data-latitude')), Number($('.single_map_area').attr('data-longitude'))];
console.log(citymap);


function initMap() {
  // Create the map.
  var map = new google.maps.Map(document.getElementById('single_map'), {
    zoom: 16,
    center: citymap.center,
    mapTypeId: 'terrain'
  });


  var cityCircle = new google.maps.Circle({
    strokeColor: '#FF0000',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FF0000',
    fillOpacity: 0.35,
    map: map,
    center: citymap.center,
    radius: Math.sqrt(citymap.population) * 100
  });

}
