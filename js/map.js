// setTimeout(function initMap() {
//   var locations = [
//     ['Rockbridge Vineyard & Brewery<br>\
//     35 Hill View Lane, Raphine, VA 24472<br>\
//    <a href="https://goo.gl/maps/nSAuJgj7NhbfMFmt9">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/rockbridge-vineyard-brewery/">Learn More</a>',   37.9420398, -79.243501],
//  	['BrewHaHa Brewing Company<br>\
//     11704 Spotswood Trail, Elkton, VA 22827<br>\
//    <a href="https://goo.gl/maps/RKnpwDrK3jRRRJ4y9">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/brewhaha-brewing-company-coming-soon/">Learn More</a>',   38.3866926, -78.7042292],
// 	['Elkton Brewing Co<br>\
//     100 N. Fifth Street, Elkton, VA 228277<br>\
//    <a href="https://goo.gl/maps/6WVpbMiH1Gq82Ja7A">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/elkton-brewing-co/">Learn More</a>',   38.4085056, -78.6268621],
//    	['Cave Hill Farms Brewery<br>\
//     1001 Jacob Burner Road, McGaheysville, VA 22840<br>\
//    <a href="https://goo.gl/maps/mMQguGJMeLBo2wdZ6">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/cave-hill-farms-brewery/">Learn More</a>',   38.3668039,-78.7239275],
//    	['Heliotrope Brewery<br>\
//     128 S Main St, Lexington, VA 24450<br>\
//    <a href="https://goo.gl/maps/e5fcHHgMFAsY7E9L9">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/heliotrope-brewery/">Learn More</a>',   37.7835036, -79.4456592],
//    	['Skipping Rock Beer Company<br>\
//     414 Parkersburg Turnpike, Staunton, VA 24401<br>\
//    <a href="https://g.page/SkippingRockBeer?share">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/skipping-rock-beer-company/">Learn More</a>',   38.1533242, -79.129892],
//    	['The Friendly Fermenter<br>\
//    	20 S Mason St Suite B10, Harrisonburg, VA 22801<br>\
//    <a href="https://goo.gl/maps/zepsAXhHKKwW7L6t5">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/the-friendly-fermenter/">Learn More</a>',  38.4488185, -78.8687177],
//    	['Brothers Craft Brewing<br>\
//    	800 N Main St, Harrisonburg, VA 22802<br>\
//    <a href="https://goo.gl/maps/igbg89ndp5RVZCkf6">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/brothers-craft-brewing/">Learn More</a>',   38.4575042, -78.8633051],
//     ['Pale Fire Brewing Co.<br>\
//    	217 S Liberty St Suite 105, Harrisonburg, VA 22801<br>\
//    <a href="https://g.page/palefirebrewing?share">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/pale-fire-brewing-co/">Learn More</a>',   38.4470221, -78.8743391],
//     ['Seven Arrows Brewing<br>\
//    	2508 Jefferson Hwy #1, Waynesboro, VA 22980<br>\
//    <a href="https://goo.gl/maps/M38gdcVtDgyNC4FN7">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/seven-arrows-brewing/">Learn More</a>',   38.0868167, -78.9411178],
//     ['Devils Backbone Brewing Company<br>\
//    	50 N Wind Ln #3303, Lexington, VA 24450<br>\
//    <a href="https://goo.gl/maps/SK8bLfEt57J6XSeD8">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/devils-backbone-brewing-co-outpost/">Learn More</a>',   37.8138944, -79.4004399],
//      ['Stable Craft Brewing<br>\
//    	375 Madrid Rd, Waynesboro, VA 22980<br>\
//    <a href="https://g.page/stablecraftbrewing?share">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/stable-craft-brewing/">Learn More</a>',  38.160023, -78.9081071],
//      ['Redbeard Brewing Company<br>\
//    	120 S Lewis St, Staunton, VA 24401<br>\
//    <a href="https://goo.gl/maps/1dbmpUP7o5aEJ12X6">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/redbeard-brewing-company/">Learn More</a>',  38.1475941, -79.0766785],
//      ['Queen City Brewing<br>\
//     834 Spring Hill Rd, Staunton, VA 24401<br>\
//    <a href="https://goo.gl/maps/4gRSKa2w2poFpw4U6">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/queen-city-brewing/">Learn More</a>',  38.1616612, -79.081079],
//      ['Three Notch’d Valley Collab House<br>\
//     834 Spring Hill Rd, Staunton, VA 24401<br>\
//    <a href="https://goo.gl/maps/CZmJNbXsXYeVtNQ79">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/three-notchd-valley-collab/">Learn More</a>',  38.4487648, -78.8677744],
//       ['Shenandoah Valley Brewing Co.<br>\
//     103 W Beverley St, Staunton, VA 24401<br>\
//    <a href="https://goo.gl/maps/5qH5YdfDhKr61p5VA">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/shenandoah-valley-brewing-co/">Learn More</a>',  38.1495069, -79.0760768],
// 	  ['Basic City Beer Co.<br>\
//     1010 E Main St, Waynesboro, VA 22980<br>\
//    <a href="https://goo.gl/maps/KeAkipdzEXf93MJXA">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/basic-city-beer-co/">Learn More</a>',  38.0636158,-78.8753744],
//      ['Restless Moons Brewing Company<br>\
//     120 W Wolfe St, Harrisonburg, VA 22802<br>\
//    <a href="https://goo.gl/maps/S3hLLe93ht3ypGC8A">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/restless-moons/">Learn More</a>',  38.4519984, -78.8729095],
//       ['Great Valley Farm Brewery And Winery<br>\
//     60 Great Valley Ln, Natural Bridge, VA 24578<br>\
//    <a href="https://goo.gl/maps/gurP2UP5Sv3Q3Z6L6">Get Directions</a> &nbsp; <a href="https://beerwerkstrail.com/brewery/great-valley-farm-brewery/">Learn More</a>',  37.6801082, -79.514899],
//   ];
//     var mapOptions = {
//         // How zoomed in you want the map to start at (always required)
//         zoom: 9,

//         // The latitude and longitude to center the map (always required)
//         center: new google.maps.LatLng(38.129576, -79.131696), // New York

//         // How you would like to style the map. 
//         // This is where you would paste any style found on Snazzy Maps.
//         styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
//     };

//     // Get the HTML DOM element that will contain your map 
//     // We are using a div with id="map" seen below in the <body>
//     var mapElement = document.getElementById('map');

//     // Create the Google Map using our element and options defined above
//     var map = new google.maps.Map(mapElement, mapOptions);


// 	var infowindow =  new google.maps.InfoWindow({});
// 	var marker, count;
// 	for (count = 0; count < locations.length; count++) {
// 	    marker = new google.maps.Marker({
// 	      position: new google.maps.LatLng(locations[count][1], locations[count][2]),
// 	      map: map,
// 	      title: locations[count][0]
// 	    });
// 	google.maps.event.addListener(marker, 'click', (function (marker, count) {
// 	      return function () {
// 	        infowindow.setContent(locations[count][0]);
// 	        infowindow.open(map, marker);
// 	      }
// 	    })(marker, count));
// 	  }

// }, 300);