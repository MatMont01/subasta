var map_object=null;
var marker_geolocation=null;
var marker_geolocation_icon={iconUrl:'/img/pos_platinum_red.png',iconSize:[40,40], iconAnchor:[20,40]};
var marker_geolocation_content='<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#relevamiento_Modal" data-id="0">Registrar</button>'//"Aqui estoy!";
var marker_geolocation_dragend_callback=null;
var geolocation_control = null;
var inicial_latitud = null;
var inicial_longitud = null;
var sw_inicial = true;

function f_map_button_mylocation(){
    switch (map_vendor) {
        case 'google':
            geolocation_control = document.createElement('button');
            geolocation_control.style.height = '34px';
            geolocation_control.style.backgroundColor = '#fff';
            geolocation_control.style.border = '2px solid #fff';
            geolocation_control.style.borderRadius = '2px';
            geolocation_control.style.boxShadow = '0 1px 2px rgba(0,0,0,.3)';
            geolocation_control.style.cursor = 'pointer';
            geolocation_control.style.marginTop = '10px';
            geolocation_control.style.textAlign = 'center';
            geolocation_control.style.padding = '7px';
            geolocation_control.innerHTML = 'Ver mi ubicacion';
            geolocation_control.title = 'Click para mostrar mi actual ubicacion!';
            //
            var geolocation_div = document.createElement('div');
            geolocation_div.index = 1;
            geolocation_div.appendChild(geolocation_control);
            map_object.controls[google.maps.ControlPosition.TOP_LEFT].push(geolocation_div);
            //
            google.maps.event.addDomListener(geolocation_control, 'click', function() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        // onSucces
                        function (onSuccesEvent) {
                            console.log('getCurrentPosition >> onSuccesEvent...');
                            sess_lat=onSuccesEvent.coords.latitude;
                            sess_lng=onSuccesEvent.coords.longitude;
                            if (marker_geolocation) {
                                marker_geolocation.setMap(null);
                            }
                            var LatLng = new google.maps.LatLng(onSuccesEvent.coords.latitude, onSuccesEvent.coords.longitude);
                            marker_geolocation = new google.maps.Marker({
                                position: {lat: sess_lat, lng: sess_lng},
                                map: map_object,
                                draggable: true,
                                title: marker_geolocation_content
                            });
                            google.maps.event.addListener(marker_geolocation, 'click', function (e) {
                                map_object.setCenter(this.position);
                                map_object.setZoom(14);
                                map_object.info_window.setContent(this.title);
                                map_object.info_window.open(map_object, this);
                            });
                            google.maps.event.trigger(marker_geolocation, 'click');

                            google.maps.event.addListener(marker_geolocation,'dragend',function(_event, _marker){
                                sess_lat=this.position.lat();
                                sess_lng=this.position.lng();
                                if (marker_geolocation_dragend_callback){
                                    marker_geolocation_dragend_callback(_event, marker_geolocation, sess_lat, sess_lng);
                                }
                            });
                        },
                        // onError
                        function (){
                            console.log('getCurrentPosition >> onError...');
                            //f_show_config_geolocation();
                        },
                        // Additional Parameters
                        { timeout: 500, enableHighAccuracy: true }
                    );
                } else {
                    console.log("Geo Location feature is not supported in this browser.");
                }
            });
            break;
        default:
            var ourCustomControl = L.Control.extend({
                options: {
                    position: 'topleft'  //control position - allowed: 'topleft', 'topright', 'bottomleft', 'bottomright'
                },
                onAdd: function (map_object) {
                    geolocation_control = L.DomUtil.create('div', 'leaflet-bar leaflet-control leaflet-control-custom');
                    geolocation_control.style.backgroundColor = 'white';
                    geolocation_control.style.height = '34px';
                    geolocation_control.style.backgroundColor = '#fff';
                    geolocation_control.style.border = '2px solid #fff';
                    geolocation_control.style.borderRadius = '2px';
                    geolocation_control.style.boxShadow = '0 1px 2px rgba(0,0,0,.3)';
                    geolocation_control.style.cursor = 'pointer';
                    geolocation_control.style.marginTop = '10px';
                    geolocation_control.style.textAlign = 'center';
                    geolocation_control.style.padding = '7px';
                    geolocation_control.innerHTML = 'Mi Ubicacion';
                    geolocation_control.title = 'Click para mostrar mi actual ubicacion!';
                    geolocation_control.onclick = function(){
                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(
                                // onSucces
                                function (onSuccesEvent) {
                                    console.log('getCurrentPosition >> onSuccesEvent...');
                                    sess_lat=onSuccesEvent.coords.latitude;
                                    sess_lng=onSuccesEvent.coords.longitude;
									
									if(sw_inicial){
										inicial_latitud = sess_lat;
										inicial_longitud = sess_lng;
										sw_inicial = false;
									}
									
                                    if (marker_geolocation) {
                                        f_map_marker_remove(marker_geolocation);
                                    }
                                    marker_geolocation = f_map_marker_create(sess_lat, sess_lng, marker_geolocation_icon, true);
                                    marker_geolocation.title=marker_geolocation_content;
                                    map_object.flyTo([sess_lat, sess_lng], 16, {animate: false});  // 12
                                    marker_geolocation.on('click', function(e) {
                                        var popLocation= new L.LatLng(sess_lat,sess_lng);
                                        var popup = L.popup()
                                            .setLatLng(popLocation)
                                            .setContent(e.target.title)
                                            .openOn(map_object);
                                    });
                                    f_map_marker_dragend(marker_geolocation, function (){
                                        /*sess_lat=marker_geolocation.getLatLng().lat;
                                        sess_lng=marker_geolocation.getLatLng().lng;
                                        if (marker_geolocation_dragend_callback){
                                            marker_geolocation_dragend_callback(_event, marker_geolocation, sess_lat, sess_lng);
                                        }*/
										lat_drag=marker_geolocation.getLatLng().lat;
										lng_drag=marker_geolocation.getLatLng().lng;
										
										if((lat_drag>(inicial_latitud-0.005) && lat_drag<(inicial_latitud+0.005)) && (lng_drag>(inicial_longitud-0.005) && lng_drag<(inicial_longitud+0.005))){
											sess_lat=lat_drag;
											sess_lng=lng_drag;
											if (marker_geolocation_dragend_callback){
												marker_geolocation_dragend_callback(_event, marker_geolocation, sess_lat, sess_lng);
											}
											map_object.flyTo([sess_lat, sess_lng], 16, {animate: false});  // 12
										}else{
											sess_lat=inicial_latitud;
											sess_lng=inicial_longitud;
											map_object.flyTo([sess_lat, sess_lng], 16, {animate: false});  // 12
											f_map_marker_moveto(marker_geolocation, [sess_lat, sess_lng])
										}
                                    });
                                    //marker_geolocation.fire('click');
                                },
                                // onError
                                function (){
									console.log('getCurrentPosition >> onError...');
									//PARA SUBIR A PRODUCCION
									//BORRAR DESDE AQUI
										/*sess_lat=-17.8089206;
										sess_lng=-63.1914432;
										marker_geolocation = f_map_marker_create(sess_lat, sess_lng, marker_geolocation_icon, true);
										marker_geolocation.title=marker_geolocation_content;
										map_object.flyTo([sess_lat, sess_lng], 16, {animate: false});  // 12
										marker_geolocation.on('click', function(e) {
											var popLocation= new L.LatLng(sess_lat,sess_lng);
											var popup = L.popup()
												.setLatLng(popLocation)
												.setContent(e.target.title)
												.openOn(map_object);
										});*/
									//HASTA AQUI
                                },
                                // Additional Parameters
                                { timeout: 500, enableHighAccuracy: true }
                            );
                        } else {
                            console.log("Geo Location feature is not supported in this browser.");
                        }
                    }
                    return geolocation_control;
                },
            });
            map_object.addControl(new ourCustomControl());
            break;
    }
}

function f_map_formatJson(rawjson) {  //callback that remap fields name
    var json = {},
        key, loc, disp = [];
    for(var i in rawjson) {
        disp = rawjson[i].display_name.split(',');
        key = disp[0] +', '+ disp[1];
        loc = L.latLng( rawjson[i].lat, rawjson[i].lon );
        json[ key ]= loc;   //key,value format
    }
    return json;
}

function f_map_create(_div, _lat, _lng, _zoom){
    var _result = null;
    switch (map_vendor) {
        case 'google':
            var mapOptions = {
                center: new google.maps.LatLng(_lat, _lng),
                zoom: _zoom,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                //gestureHandling: 'cooperative'
                gestureHandling: 'greedy'
            };
            _result = new google.maps.Map(document.getElementById(_div), mapOptions);
            _result.setCenter( {lat:_lat, lng:_lng} );
            _result.setZoom( _zoom );
            _result.info_window = new google.maps.InfoWindow({content: ""});
            map_object = _result;
            //
            f_map_button_mylocation();
            //
            break;
        default:
            var osmMap = L.tileLayer(
                'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                {maxZoom: 24, maxNativeZoom: 24, attribution: '&copy; <a href="https://openstreetmap.org">OpenStreetMap</a> Contributors'}
            );
            var Esri_WorldImagery = L.tileLayer(
                'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
                {maxZoom: 24, maxNativeZoom: 24, attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'}
            );
            var OpenMapSurfer_Roads = L.tileLayer(
                'https://korona.geog.uni-heidelberg.de/tiles/roads/x={x}&y={y}&z={z}',
                { maxZoom: 24, maxNativeZoom: 24,
                  attribution: 'Imagery from <a href="https://giscience.uni-hd.de/">GIScience Research Group @ University of Heidelberg</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'}
            );
            _result = L.map(_div, {
                layers: [osmMap],
                renderer: L.canvas(),
                preferCanvas: true
                }
            ).setView([_lat, _lng], _zoom);

            var baseLayers = {
                "Mapa": osmMap,
                "Satelite": Esri_WorldImagery//,
                //"Calles": OpenMapSurfer_Roads
            };
            var mobileOpts = {
                url: 'https://nominatim.openstreetmap.org/search?format=json&q={s}',
                jsonpParam: 'json_callback',
                formatData: f_map_formatJson,
                textPlaceholder: 'Calle/Avenida, Ciudad',
                autoType: false,
                hideMarkerOnCollapse: false,
                autoCollapse: false,
                autoCollapseTime: 12000,
                delayType: 800, //with mobile device typing is more slow
                marker: {
                    icon: true
                }
            };
            _result.addControl( new L.Control.Search(mobileOpts) );
            L.control.layers(baseLayers,null,{position: 'topleft'}).addTo(_result);
            _result.panTo(L.latLng(_lat, _lng), _zoom, {animation: false});  // 12
            map_object = _result;
            f_map_button_mylocation();
            var popup = L.popup().setLatLng([_lat, _lng]).setContent('');
            map_object.info_window=popup;
            break;
        }
    return _result;
}

function f_map_view(_lat, _lng, _zoom){
    switch (map_vendor) {
        case 'google':
            map_object.setCenter(new google.maps.LatLng(_lat, _lng));
            map_object.setZoom(_zoom);
            break;
        default:
            map_object.setView(L.latLng(_lat, _lng), _zoom); // , {animation: false}
            break;
    }
}

function f_map_invalidate(){
    switch(map_vendor){
        case 'google':
            //map_object.invalidate();
            google.maps.event.trigger(map_object, 'resize');
            break;
        default:
            setTimeout(function(){ map_object.invalidateSize()}, 200);
            break;
    }
}

function f_map_onclick(_url, _parameters, _callback_function){
    switch (map_vendor) {
        case 'google':
            google.maps.event.addListener(map_object, 'click',
                function(event) {
                    if (typeof _url === 'undefined' || _url === null) {
                        if (_callback_function instanceof Function){
                            _callback_function(event, map_object, _parameters);
                        }
                    } else {
                         ajax.post(_url, _parameters,
                            function(response_text){
                                if (_callback_function instanceof Function){
                                    var v_content=_callback_function(event, map_object, _parameters, response_text);
                                    map_object.info_window.setContent(v_content);
                                } else {
                                    map_object.info_window.setContent(response_text);
                                }
                            }
                        );
                    }
                }
            );
            break;
        default:
            map_object.on('click', function(event) {
                if (typeof _url === 'undefined' || _url === null) {
                    if (_callback_function instanceof Function){
                        _callback_function(event, map_object, _parameters);
                    }
                } else {
                    ajax.post(_url, _parameters,
                        function(response_text){
                            var popup = L.popup()
                                        .setLatLng(event.latlng)
                                        .setContent('')
                                        .openOn(map_object);
                            map_object.info_window=popup;
                            if (_callback_function instanceof Function){
                                var v_content=_callback_function(event, map_object, _parameters, response_text);
                                popup.setContent(v_content);
                                popup.update();
                            } else {
                                popup.setContent(response_text);
                                popup.update();
                            }
                        }
                    );
                }
            });
    }
}


function f_map_getlat(_latlng){
    var _result=null;
    switch (map_vendor) {
        case 'google':
            _result = _latlng.lat();
            break;
        default:
            _result = _latlng.lat;
    }
    return _result;
}

function f_map_getlng(_latlng){
    var _result=null;
    switch (map_vendor) {
        case 'google':
            _result = _latlng.lng();
            break;
        default:
            _result = _latlng.lng;
    }
    return _result;
}

function f_map_latlng(_lat, _lng){
    var _result=null;
    switch (map_vendor) {
        case 'google':
            _result = new google.maps.LatLng(_lat, _lng);
            break;
        default:
            _result = new L.latLng(_lat, _lng);
            break;
    }
    return _result;
}

function f_map_eventLocation( _event ){
    var _result=null;
    switch (map_vendor) {
        case 'google':
            _result = f_map_latlng( _event.latLng.lat(), _event.latLng.lng() );
            break;
        default:
            _result = f_map_latlng( _event.target.getLatLng().lat, _event.target.getLatLng().lng ); // _event.latlng;
            break;
    }
    return _result;
}

function f_map_getcenter(){
    var _result=null;
    switch (map_vendor) {
        case 'google':
            var _center_g = map_object.getCenter();
            _result = f_map_latlng( _center_g.lat(), _center_g.lng() );
            break;
        default:
            var _center_l = map_object.getCenter();
            _result = f_map_latlng( _center_l.lat, _center_l.lng );
            break;
    }
    return _result;
}


function f_map_marker_create(_lat, _lng, _icon, _draggable){
    //iconUrl:'', iconSize:[ancho,alto], iconAnchor:[0,0]
    if (typeof _draggable === 'undefined' || _draggable === null ) { var _draggable=false; }
    var _result=null;
    switch (map_vendor) {
        case 'google':
            _result = new google.maps.Marker({
                position: new google.maps.LatLng(_lat, _lng),
                map: map_object,
                draggable: _draggable,
                icon:{
                    url: _icon.iconUrl,
                    scaledSize: new google.maps.Size( _icon.iconSize[0], _icon.iconSize[1] ), // scaled size
                    origin: new google.maps.Point(0, 0), // origin
                    anchor: new google.maps.Point(_icon.iconAnchor[0], _icon.iconAnchor[1]) // anchor
                }
            });
            _result.class_vendor = map_vendor;
            _result.class_map = map_object;
            _result.class_lat = _lat;
            _result.class_lng = _lng;
            _result.class_icon = _icon;
            break;
        default:
            _result = new L.marker([_lat, _lng], {draggable: _draggable, icon: L.icon(_icon)});
            _result.class_vendor = map_vendor;
            _result.class_map = map_object;
            _result.class_icon = _icon;
            _result.addTo(map_object);
            break;
    }
    return _result;
}

function f_map_marker_onclick(_marker, _url, _parameters, _callback_function){
    switch (map_vendor) {
        case 'google':
            google.maps.event.addListener( _marker, 'click',
                function(event){
                        map_object.object_focus = _marker;
                        map_object.info_window.setContent( f_loading() );
                        map_object.info_window.setPosition(_marker.position);
                        map_object.info_window.open(map_object);
                        if (typeof _url === 'undefined' || _url === null) {
                            if (_callback_function instanceof Function){
                                _callback_function(event, _marker, _parameters);
                            }
                        } else {
                            ajax.post(_url, _parameters,
                                function(response_text){
                                    if (_callback_function instanceof Function){
                                        var v_content=_callback_function(event, _marker, _parameters, response_text);
                                        map_object.info_window.setContent(v_content);
                                    } else {
                                        map_object.info_window.setContent(response_text);
                                    }
                                }
                            );
                        }
                    });
            break;
        default:
            _marker.bindPopup(f_loading());
            _marker.on('click', function(event) {
                map_object.object_focus = _marker;
                var popup = event.target.getPopup();
                map_object.info_window=popup;
                popup.setContent(f_loading());
                if (typeof _url === 'undefined' || _url === null) {
                    if (_callback_function instanceof Function){
                        _callback_function(event, _marker, _parameters);
                    }
                } else {
                    ajax.post( _url, _parameters,
                        function(response_text){
                            if (_callback_function instanceof Function){
                                var v_content=_callback_function(event, _marker, _parameters, response_text);
                                popup.setContent(v_content);
                                popup.update();
                            } else {
                                popup.setContent(response_text);
                                popup.update();
                            }
                        }
                    );
                }
            });
    }
}

function f_map_marker_latlng(_marker){
    var _result=null;
    switch (map_vendor) {
        case 'google':
            let _pos_g = _marker.getPosition();
            _result = f_map_latlng( _pos_g.lat(), _pos_g.lng() );
            break;
        default:
            var _pos_l = _marker.getLatLng();
            _result = f_map_latlng( _pos_l.lat, _pos_l.lng );
            break;
    }
    return _result;
}

function f_map_marker_moveto(_marker, _latlng){
    switch (map_vendor) {
        case 'google':
            if (_marker){
                _marker.setPosition( _latlng );
            }
            break;
        default:
            if (_marker){
                _marker.setLatLng(_latlng).update();
            }
            break;
    }
}

function f_map_marker_fire(_marker){
    switch(map_vendor){
        case 'google':
            google.maps.event.trigger(_marker, 'click');
            break;
        default:
            _marker.fire('click');
            break;
    }
}

function f_map_marker_remove(_marker){
    switch(map_vendor){
        case 'google':
            _marker.setMap(null);
            break;
        default:
            map_object.removeLayer(_marker);
            break;
    }
}

function f_map_marker_inside(_marker, _polygon) {
    var inside = false;
    switch (map_vendor) {
        case 'google':
            inside = google.maps.geometry.poly.containsLocation(_marker.getPosition(), _polygon);
            break;
        default:
            var x = _marker.getLatLng().lat;
            var y = _marker.getLatLng().lng;
            for (var ii=0;ii<_polygon.getLatLngs().length;ii++){
                var polyPoints = _polygon.getLatLngs()[ii];
                for (var i = 0, j = polyPoints.length - 1; i < polyPoints.length; j = i++) {
                    var xi = polyPoints[i].lat, yi = polyPoints[i].lng;
                    var xj = polyPoints[j].lat, yj = polyPoints[j].lng;

                    var intersect = ((yi > y) != (yj > y))
                        && (x < (xj - xi) * (y - yi) / (yj - yi) + xi);
                    if (intersect) inside = !inside;
                }
            };
    }
    return inside;
};

function f_map_marker_visible(_marker, _visible){
    if (typeof _visible === 'undefined' || _visible === null ) { var _visible=true; }
    switch (map_vendor) {
        case 'google':
            if (_marker){
                _marker.setVisible( _visible );
            }
            break;
        default:
            if (_marker){
                if (_visible){
                    map_object.addLayer( _marker );
                } else {
                    map_object.removeLayer( _marker );
                }
            }
            break;
    }
}

function f_map_marker_mouseout(_marker, _callback_function){
    switch (map_vendor) {
        case 'google':
            google.maps.event.addListener(_marker, 'mouseout', function(e) {
                _callback_function(e,_marker);
            });
            break;
        default:
            _marker.on('mouseout', function(e){
                _callback_function(e,_marker);
            });
            break;
    }
}

function f_map_marker_dragend(_marker, _callback_function){
    switch (map_vendor) {
        case 'google':
            google.maps.event.addListener(_marker, 'dragend', function(e) {
                _callback_function(e, _marker);
            });
            break;
        default:
            _marker.on('dragend', function(e){
                _callback_function(e, _marker);
            });
            break;
    }
}

function f_map_polygon_create(_paths, _style){
    var _result=null;
    switch (map_vendor) {
        case 'google':
            _result = new google.maps.Polygon({ //items
                paths         : _paths,
                strokeColor   : _style.color,
                strokeOpacity : _style.opacity,
                strokeWeight  : _style.weight,
                fillColor     : _style.fillColor,
                fillOpacity   : _style.fillOpacity
            });
            _result.class_vendor = map_vendor;
            _result.class_paths  = _paths;
            _result.setMap(map_object);
            break;
        default:
            _result = new L.polygon(_paths, _style);
            _result.class_vendor = map_vendor;
            _result.class_paths  = _paths;
            _result.addTo(map_object);
            break;
    }
    return _result;
}

function f_map_polygon_latlng(_lat, _lng){
    return f_map_latlng(_lat, _lng);
}


function f_map_polygon_onclick(_polygon, _url, _parameters, _callback_function,_mouseover,_mouseout){
    switch (map_vendor) {
        case 'google':
            google.maps.event.addListener(_polygon, 'click',
                ( function(event) {
                    return function(event){
                        if (typeof _url === 'undefined' || _url === null) {
                            if (_callback_function instanceof Function){
                                _callback_function(event, _polygon, _parameters);
                            }
                        } else {
                            map_object.info_window.setContent( f_loading() );
                            map_object.info_window.setPosition(event.latLng);
                            map_object.info_window.open(map_object);
                            ajax.post(_url, _parameters,
                                function(response_text){
                                    map_object.info_window.setContent(response_text);
                                }
                            );
                            ajax.post(_url, _parameters,
                                function(response_text){
                                    if (_callback_function instanceof Function){
                                        var v_content=_callback_function(event, _polygon, _parameters, response_text);
                                        map_object.info_window.setContent(v_content);
                                    } else {
                                        map_object.info_window.setContent(response_text);
                                    }
                                }
                            );
                        }
                    }
                })(_polygon)
            );
            break;
        default:
            _polygon.on('click', function(event) {
                if (typeof _url === 'undefined' || _url === null) {
                    if (_callback_function instanceof Function){
                        _callback_function(event, _polygon, _parameters);
                    }
                } else {
                    _polygon.bindPopup( f_loading() );
                    var popup = event.target.getPopup();
                    map_object.info_window = popup;
                    ajax.post( _url, _parameters,
                        function(response_text){
                            if (_callback_function instanceof Function){
                                var v_content=_callback_function(event, _polygon, _parameters, response_text);
                                popup.setContent(v_content);
                                popup.update();
                            } else {
                                popup.setContent(response_text);
                                popup.update();
                            }
                        }
                    );
                }
            });
         break;
    }
}

function f_map_polygon_mouseover(_polygon, _callback_function){
    switch (map_vendor) {
        case 'google':
            google.maps.event.addListener(_polygon, 'mouseover', function(e) {
              //this.setAnimation(google.maps.Animation.BOUNCE);
              _callback_function(e,_polygon);
            });
            ;//
            break;
        default:
            _polygon.on('mouseover', function(e){
                _callback_function(e,_polygon);
            });
            break;
    }
}

function f_map_polygon_mouseout(_polygon, _callback_function){
    switch (map_vendor) {
        case 'google':
            google.maps.event.addListener(_polygon, 'mouseout', function(e) {
              //this.setAnimation(null);
              _callback_function(e,_polygon);
            });
            break;
        default:
            _polygon.on('mouseout', function(e){
                _callback_function(e,_polygon);
            });
            break;
    }
}

function f_map_add_div(_div){
    switch (map_vendor) {
        case 'google':
            $('#legend').show();
            var legend = document.getElementById('legend');
                legend.innerHTML=_div;
            map_object.controls[google.maps.ControlPosition.TOP_RIGHT].push(legend);
            break;
        default:
             var legend_up = L.control({position: 'topright'});
            legend_up.onAdd = function (map_object) {
                var div = L.DomUtil.create('div', 'info legend'),grades = [],value  = [],labels = [],from, to;
                labels.push(_div);
                div.innerHTML = labels.join('<br>');
                return div;
            };
            legend_up.addTo(map_object);

            break;
    }
}


function f_map_polygon_fire(_polygon){
    switch(map_vendor){
        case 'google':
            google.maps.event.trigger(_polygon, 'click')
            break;
        default:
            _polygon.fire('click');
            break;
    }
}

function f_map_polygon_remove(_polygon){
    switch(map_vendor){
        case 'google':
            _polygon.setMap(null);
            break;
        default:
            map_object.removeLayer(_polygon);
            break;
    }
}

function f_map_polygon_center(_polygon){
    var _result=null;
    switch (map_vendor) {
        case 'google':
            let bounds = new google.maps.LatLngBounds()
            _polygon.getPath().forEach(function(element,index,array){
                bounds.extend(element)
            });
            let _g = bounds.getCenter();
            _result = {lat:_g.lat(), lng:_g.lng(), alt:0};
            break;
        default:
            let _l = _polygon.getCenter();
            _result = new L.LatLng(_l.lat, _l.lng);
            break;
    }
    return _result;
}


function f_map_polyline_create(_paths, _style){
    var _result=null;
    switch (map_vendor) {
        case 'google':
            var v_line_symbol = {
                path: 'M 0,-1 0,1',
                strokeOpacity: 1,
                scale: 4
            };
            _result = new google.maps.Polyline({
                path          : _paths,
                strokeColor   : _style.color,
                strokeOpacity : _style.opacity,
                strokeWeight  : _style.weight,
                fillColor     : _style.fillColor,
                fillOpacity   : _style.fillOpacity,
                icons         : [{ icon: v_line_symbol, offset: '0', repeat: '16px'}]
            });
            _result.class_vendor = map_vendor;
            _result.class_paths  = _paths;
            _result.setMap(map_object);
            break;
        default:
            _result = L.polyline(_paths, _style).addTo(map_object);
            _result.class_vendor = map_vendor;
            _result.class_paths  = _paths;
            break;
    }
    return _result;
}

function f_map_polyline_remove(_polyline){
    switch(map_vendor){
        case 'google':
            _polyline.setMap(null);
            break;
        default:
            map_object.removeLayer( _polyline );
            break;
    }
}

function f_map_circle_create(_lat, _lng, _style){
    var _result=null;
    switch(map_vendor){
        case 'google':
            _result = new google.maps.Circle({
                strokeColor     : _style.color,
                strokeWeight    : _style.weight,
                strokeOpacity   : _style.opacity,
                fillColor       : _style.fillColor,
                fillOpacity     : _style.fillOpacity,
                map             : map_object,
                center          : {lat: _lat, lng: _lng},
                radius          : _style.radius,
                //dashArray       : _style.dashArray,
                fill            : _style.fill
              });
            break;
        default:
            _result=L.circle([_lat, _lng], _style).addTo(map_object);
            break;
    }
    return _result;
}

function f_map_circle_remove(_circle){
    switch(map_vendor){
        case 'google':
            _circle.setMap(null);
            break;
        default:
            map_object.removeLayer( _circle );
            break;
    }
}

function f_map_infowindow_show(_html_content){
    switch (map_vendor) {
        case 'google':
            if (map_object.info_window){
                map_object.info_window.setContent( f_loading() );
                map_object.info_window.open(map_object);
                map_object.info_window.setContent(_html_content);
            }
            break;
        default:
            if (map_object.info_window){
                map_object.info_window.setContent(_html_content);
                map_object.info_window.update();
            }
            break;
    }
}

function f_map_infowindow_close(){
    switch (map_vendor) {
        case 'google':
            if (map_object.info_window){
                map_object.info_window.close();
            }
            break;
        default:
            if (map_object.info_window){
                map_object.closePopup();
            }
            break;
    }
}

function f_map_event_latlng(_event){
    var _result=null;
    switch (map_vendor) {
        case 'google':
            var lat=_event.latLng.lat();
            var lng=_event.latLng.lng();
            _result = f_map_latlng(lat, lng);
            break;
        default:
            _result = _event.latlng;
            break;
    }
    return _result;
}

function f_map_popup_show(_latlng, _content){
    switch(map_vendor){
        case 'google':
            if (!map_object.info_window) {
                map_object.info_window = new google.maps.InfoWindow({content: ""});
            }
            var popup=map_object.info_window;
            popup.setPosition(_latlng);
            popup.open(map_object);
            popup.setContent( _content );
            break;
        default:
            if (!map_object.info_window){
                map_object.info_window = L.popup();
            }
            var popup=map_object.info_window;
                popup.setLatLng(_latlng)
                    .setContent(_content)
                    .openOn(map_object)
                    ;
            break;
    }
}

function f_map_popup_close(){
    switch (map_vendor) {
        case 'google':
            if (map_object.info_window){
                map_object.info_window.close();
            }
            break;
        default:
            if (map_object.info_window){
                map_object.closePopup();
            }
            break;
    }
}

function f_map_distance_degreesToRadians(degrees){
    return degrees * Math.PI / 180;
}

function f_map_distance(lat1, lng1, lat2, lng2){
    // The radius of the planet earth in meters
    let R = 6378137;
    let dLat = f_map_distance_degreesToRadians(lat2 - lat1);
    let dLong = f_map_distance_degreesToRadians(lng2 - lng1);
    let a = Math.sin(dLat / 2)
            *
            Math.sin(dLat / 2)
            +
            Math.cos(f_map_distance_degreesToRadians(lat1))
            *
            Math.cos(f_map_distance_degreesToRadians(lat1))
            *
            Math.sin(dLong / 2)
            *
            Math.sin(dLong / 2);
    let c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    let distance = R * c;
    return distance;
}

/*
function f_map_lat_long(_map) {
	let position;
	//arr_item.push({name:'scz', lat:-17.78272597655763, lng:-63.10971483770982, zoom:12});
	  const myLatlng = { lat: -17.78272597655763, lng: -63.10971483770982 };
	  //const _map = new google.maps.Map(document.getElementById("map_canvas"), {
		//zoom: 4,
		//center: myLatlng,
	  //});
	  // Create the initial InfoWindow.
	  let infoWindow = new google.maps.InfoWindow({
		content: "Click the map to get Lat/Lng!",
		position: myLatlng,
	  });
	  infoWindow.open(_map);
	  // Configure the click listener.
	  _map.addListener("click", (mapsMouseEvent) => {
		// Close the current InfoWindow.
		infoWindow.close();
		// Create a new InfoWindow.
		infoWindow = new google.maps.InfoWindow({
		  position: mapsMouseEvent.latLng,
		});
		infoWindow.setContent(
		  JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
		);
		position = infoWindow.content;
		//console.log(infoWindow.content);
		infoWindow.open(_map);
		//return _map;
	  });
	  //return _map;
}
*/