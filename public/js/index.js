// 初回起動時処理
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 30, lng: 150},
    zoom: 3
  });

  setMarkers(map);
}

// ピンを用意しておく
var pins = [];
$('.list').each(function(i) {
    pins[i] = [Number($(this).attr('data-latitude')), Number($(this).attr('data-longitude')), $(this).attr('data-price'), $(this).attr('data-title')];
});

// マーカーをセットする
function setMarkers(map) {
    for (var i = 0; i < pins.length; i++) {
        var pin = pins[i];
        var marker = new google.maps.Marker({
            position: {lat: pin[0], lng: pin[1]},
            map: map,
            icon: './images/15.jpg'
        });
        // 吹き出しを生成
        var infoWindow = new google.maps.InfoWindow({
            content: '<div id="infoWindowInner">'
                   + '<div class="info_title">' + pin[3] + '</div>'
                   + '<div class="info_price">' + pin[2] + '</div>'
                   + '</div>',
        });
        infoWindow.set("id", i);
        infoWindow.open(map, marker);
    }
}
