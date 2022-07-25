(function( $ ) {

    /**
     * initMap
     *
     * Renders a Google Map onto the selected jQuery element
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   jQuery $el The jQuery element.
     * @return  object The map instance.
     */
    function initMap( $el ) {
    
        // Find marker elements within map.
        var $markers = $el.find('.marker');
    
        //Map data load json
       
        // Create gerenic map.
        var mapArgs = {
            zoom        : $el.data('zoom') || 16,
            mapTypeId   : google.maps.MapTypeId.ROADMAP,
            styles:[
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "landscape.natural.landcover",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "saturation": "44"
                        },
                        {
                            "lightness": "0"
                        },
                        {
                            "gamma": "1.00"
                        },
                        {
                            "color": "#eaeaea"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dedede"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": "-30"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "invert_lightness": true
                        },
                        {
                            "lightness": "79"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e9e9e9"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "invert_lightness": true
                        },
                        {
                            "lightness": "66"
                        },
                        {
                            "saturation": "-4"
                        }
                    ]
                }
            ]
        };

        // Define the LatLng coordinates for the polygon's path.
        const rockbridgeCords = [
            { lng: -79.4857406616211, lat: 38.079716880830006 },
            { lng: -79.52659606933592, lat: 38.04052046968823 },
            { lng: -79.51663970947266, lat: 38.03105612173487  },
            { lng: -79.65328216552734,lat: 37.870652726398454  },
            { lng: -79.64710235595703, lat:  37.86726491715302  },
            { lng: -79.6424674987793, lat:  37.87146577743901 },
            { lng: -79.6156883239746, lat: 37.85411874266436  },
            { lng: -79.68658447265625, lat:  37.737598269779824 },
            { lng: -79.67370986938477, lat: 37.70188646317583  },
            { lng: -79.66718673706055, lat:  37.69835508338046 },
            { lng: -79.68830108642578,  lat: 37.66411914805467  },
            { lng: -79.57328796386717, lat:  37.59573590243413  },
            { lng: -79.58015441894531, lat: 37.579956684077274  },
            { lng: -79.50702667236328, lat: 37.530693136503785 },
            { lng: -79.43733215332031, lat: 37.56988888346707  },
            { lng: -79.45621490478514, lat: 37.59764006462898  },
            { lng: -79.44660186767578,lat:  37.617494852086566  },
            { lng: -79.4314956665039, lat:  37.61640705577992 },
            { lng: -79.32952880859375,lat:  37.6514804665061  },
            { lng: -79.30137634277344, lat: 37.74329970164701 },
            { lng: -79.2330551147461, lat:  37.811411388625636  },
            { lng: -79.22206878662108,lat:  37.79432152573488  },
            { lng: -79.20112609863281, lat: 37.7916084854395  },
            { lng: -79.14413452148436, lat: 37.85479643784179  },
            { lng: -79.14859771728516, lat: 37.86374143030225 },
            { lng: -79.14619445800781, lat: 37.86834903305901 },
            { lng: -79.1891098022461, lat: 37.90574126308395  },
            { lng: -79.4857406616211, lat:  38.079716880830006  },

        ];
        // Construct the polygon.
        const rockbridgePolygon = new google.maps.Polygon({
            paths:  rockbridgeCords,
            strokeColor: "983738",
            strokeOpacity: 0.8,
            strokeWeight: 0,
            fillColor: "#983738",
            fillOpacity: 0.2,
        });
        var map = new google.maps.Map( $el[0], mapArgs );


        rockbridgePolygon.setMap(map);

        // var label = new google.maps.Marker({
        //     position: new google.maps.LatLng(50,50),
        //     map: map,
        //     icon: "/images/mytextasanimage.png"
        // });

        
          // Define the LatLng coordinates for the polygon's path.
            const augustaCords = [
                { lng: -79.24713134765625, lat: 38.46541758885631 },
                { lng: -79.53483581542969, lat: 38.14589758076173 },
                { lng: -79.43801879882812, lat: 38.16911413556086 },
                { lng: -79.49981689453125, lat: 38.08809407886683 },
                { lng: -79.16404724121094, lat: 37.89111178228465 },
                { lng: -79.03427124023438, lat: 37.86455455760559 },
                { lng: -78.98002624511719, lat: 37.85316995894978 },
                { lng: -78.892822265625, lat: 38.00049145082287 },
                { lng: -78.77471923828125, lat: 38.08809407886683 },
                { lng: -78.74176025390625, lat: 38.21444607848999 },
                { lng: -79.24713134765625, lat: 38.46541758885631 },
            ];
            // Construct the polygon.
            const augustaPolygon = new google.maps.Polygon({
                paths: augustaCords,
                strokeColor: "#D08E30",
                strokeOpacity: 0.8,
                strokeWeight: 0,
                fillColor: "#D08E30",
                fillOpacity: 0.2,
            });
            
            augustaPolygon.setMap(map);
        

            // Define the LatLng coordinates for the polygon's path.
            const rockinghamCords = [
            { lng: -79.24713134765625, lat: 38.46595521912682 },
            { lng: -78.73764038085938, lat: 38.21336707443818 },
            { lng: -78.54400634765624, lat: 38.35431109733493 },
            { lng: -78.4866714477539, lat: 38.42185622831224 },
            { lng: -78.54263305664062, lat: 38.43019407828687 },
            { lng: -78.55052947998047, lat: 38.42669767774884},
            { lng: -78.55636596679688, lat: 38.447135775082444  },
            { lng: -78.62159729003906, lat: 38.466761657017756 },
            { lng: -78.63361358642578, lat: 38.48826334067771 },
            { lng: -78.69335174560547, lat: 38.506803391292294 },
            { lng: -78.64013671875, lat: 38.60372497625824 },
            { lng: -78.99547576904297, lat: 38.85120554248162 },
            { lng: -79.0792465209961, lat: 38.73587485347638 },
            { lng: -79.24713134765625, lat: 38.46595521912682 },
        ];
        // Construct the polygon.
        const rockinghamPolygon = new google.maps.Polygon({
            paths: rockinghamCords,
            strokeColor: "#5F68A7",
            strokeOpacity: 0.8,
            strokeWeight: 0,
            fillColor: "#5F68A7",
            fillOpacity: 0.2,
        });
        
        rockinghamPolygon.setMap(map);

        var legend = document.createElement('div');
        legend.id = 'legend';
        var content = [];
        content.push('<h3>LEGEND</h3><p> <span class = "region-a-marker"><a href="#zoneAanchor">Zone A</a></span><br/><span class = "region-b-marker"><a href="#zoneBanchor"></div>Zone B</a></span><br/><span class = "region-c-marker"><a href="#zoneCanchor"></div>Zone C</a></span></p>');
        legend.innerHTML = content.join('');
        legend.index = 1;
    map.controls[google.maps.ControlPosition.RIGHT_TOP].push(legend);

        // Add markers.
        map.markers = [];
        $markers.each(function(){
            initMarker( $(this), map );
        });

        // Center map based on markers.
        centerMap( map );
    
        // Return map instance.
        return map;
    }

    
    /**
     * initMarker
     *
     * Creates a marker for the given jQuery element and map.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   jQuery $el The jQuery element.
     * @param   object The map instance.
     * @return  object The marker instance.
     */
    function initMarker( $marker, map ) {
    
        // Get position from marker.
        var lat = $marker.data('lat');
        var lng = $marker.data('lng');
        var latLng = {
            lat: parseFloat( lat ),
            lng: parseFloat( lng )
        };
    

        // var pngGold = "http://beerwerks-test.local/wp-content/uploads/2022/07/noun-location-1807386-BD8429.png";
    //     var pngBlue = "http://beerwerks-test.local/wp-content/uploads/2022/07/noun-location-1807386-5F68A7.png";
    //     var pngRed = "http://beerwerks-test.local/wp-content/uploads/2022/07/noun-location-1807386-983738.png";

    //   const pngMarkers = {
    //     Augusta: {
    //       icon: pngGold,
    //     },
    //     Rockingham: {
    //       icon: pngBlue,
    //     },
    //     Rockbridge: {
    //       icon: pngRed,
    //     },
    //   };


        // Create marker instance.
        //         var pngMarkera = "http://beerwerkstest2.local/wp-content/uploads/2022/07/blue-marker-border.png";

        // var marker = new google.maps.Marker({
        //     position : latLng,
        //     map,
        //     icon: {
        //         url: pngMarkera,
        //         scaledSize: new google.maps.Size(50, 50),
        //     },
        // });
    
        //  // Create marker instance.
        //  var pngMarkerb = "http://beerwerkstest2.local/wp-content/uploads/2022/07/gold-marker-border.png";

        //  var markerb = new google.maps.Marker({
        //      position : latLng,
        //      map,
        //      icon: {
        //          url: pngMarkerb,
        //          scaledSize: new google.maps.Size(50, 50),
        //      },
        //  });
    
        //   // Create marker instance.
        //   var pngMarkerc = "http://beerwerkstest2.local/wp-content/uploads/2022/07/red-border-marker.png";

        //   var markerc = new google.maps.Marker({
        //       position : latLng,
        //       map,
        //       icon: {
        //           url: pngMarkerc,
        //           scaledSize: new google.maps.Size(50, 50),
        //       },
        //   });

      
                  // Create marker instance.
          var pngMarker = "https://beerwerkstrail.com/wp-content/uploads/2022/07/dark-grey-marker.png";

          var marker = new google.maps.Marker({
              position : latLng,
              map,
              icon: {
                  url: pngMarker,
                  scaledSize: new google.maps.Size(50, 50),
              },
          });

        // for (let i = 0; i < features.length; i++) {
        //     const marker = new google.maps.Marker({
        //       position: features[i].position,
        //       icon: icons[features[i].type].icon,
        //       map: map,
        //     });
        
        // Append to reference for later use.
        map.markers.push( marker);
    
        // If marker contains HTML, add it to an infoWindow.
        if( $marker.html() ){
    
            // Create info window.
            var infowindow = new google.maps.InfoWindow({
                content: $marker.html()
            });
    
            // Show info window when marker is clicked.
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open( map, marker );
            });
        }
    }
    
    /**
     * centerMap
     *
     * Centers the map showing all markers in view.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   object The map instance.
     * @return  void
     */
    function centerMap( map ) {
    
        // Create map boundaries from all map markers.
        var bounds = new google.maps.LatLngBounds();
        map.markers.forEach(function( marker ){
            bounds.extend({
                lat: marker.position.lat(),
                lng: marker.position.lng()
            });
        });
    
        // Case: Single marker.
        if( map.markers.length == 1 ){
            map.setCenter( bounds.getCenter() );
    
        // Case: Multiple markers.
        } else{
            map.fitBounds( bounds );
        }
    }
    
    // Render maps on page load.
    $(document).ready(function(){
        $('.acf-map').each(function(){
            var map = initMap( $(this) );
        });
    });
    
    })(jQuery);