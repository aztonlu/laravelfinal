@extends('website.partials.es.maintrip')
@section('title', 'Mapa')


@section('content')


<div class="trip-detail">
    <div class="container">
        <div class="col-xs-12">
                    @include('flash::message')
        </div>
        <div class="col-md-9 tab-wrap">
            <!--@foreach($tours as $tour)
            <h2>{{ $tour->title}}</h2>
            </div>-->
            <div class="description">
                <!--AQUI COMIENZA EL CODIGO DE MAPA!! -->

                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxJnaq8H2Ib6E0bBT1sTnSnGZ5tqONxFI&callback=initMap"></script>

                <script>
                function initMap() {
                    var styleArray = [
                        {
                            "featureType": "administrative.country",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#70a37e"
                                },
                                {
                                    "saturation": "0"
                                },
                                {
                                    "lightness": "0"
                                },
                                {
                                    "gamma": "0.9"
                                },
                                {
                                    "weight": "1.15"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#FFBB00"
                                },
                                {
                                    "saturation": 43.400000000000006
                                },
                                {
                                    "lightness": 37.599999999999994
                                },
                                {
                                    "gamma": 1
                                }
                            ]
                        },

                        {
                            "featureType": "road.arterial",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#FF0300"
                                },
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 51.19999999999999
                                },
                                {
                                    "gamma": 1
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#FF0300"
                                },
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 52
                                },
                                {
                                    "gamma": 1
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#0078FF"
                                },
                                {
                                    "saturation": -13.200000000000003
                                },
                                {
                                    "lightness": 2.4000000000000057
                                },
                                {
                                    "gamma": 1
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#58a2d8"
                                }
                            ]
                        }
                    ];

                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 13,
                        center: {lat: -13.521724002775906, lng: -71.96656546350101},
                        styles: styleArray,
                        scrollwheel:  false,
                        mapTypeControl: false
                    });

                    setMarkers(map);
                }

                // Data for the markers consisting of a name, a LatLng and a zIndex for the
                // order in which these markers should display on top of each other.


                function setMarkers(map) {
                    // Adds markers to the map.
                    var image = {
                        url: '{{url('')}}/img/ubc.png',
                        // This marker is 20 pixels wide by 32 pixels high.
                        size: new google.maps.Size(20, 25),
                        // The origin for this image is (0, 0).
                        origin: new google.maps.Point(0, 0),
                        // The anchor for this image is the base of the flagpole at (0, 32).
                        anchor: new google.maps.Point(10, 25)
                    };

                    var shape = {
                        coords: [1, 1, 1, 20, 18, 20, 18, 1],
                        type: 'poly'
                    };
                    var arreglo = <?php echo json_encode($etapesforMap); ?>;


                    for (var i = 0; i < arreglo.length; i++) {
                        var beach = arreglo[i];
                        var value = parseFloat(beach["latitude"]);
                        var value1 = parseFloat(beach["longitude"]);
                        var title = beach["name"];

                        var marker = new google.maps.Marker({
                            position: {lat: value, lng: value1},
                            map: map,
                            icon: image,
                            shape: shape,
                            title: title
                        });
                    }
                }

            </script>

              <div id="map" style="height: 300px">
              </div>

                <!--AQUI ESTOY COMENTANDO EL ANTERIOR CODIGO
                <h3>En quelques mo.2121321ts...</h3>
                <br>
                <p>{{ $tour->summary}}</p>
                HASTA AQUI!! -->
            </div>
            @endforeach
            <!--<ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#itenary">Itinéraire</a></li>
                <li class=""><a href="#overview">Organisation</a></li>
            </ul>-->
             <!--<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" style="bottom:0px; right:0px;">
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_google_plus"></a>
                <a class="a2a_button_pinterest"></a>
            </div>-->

        </div>

        <div class="col-md-3 tab-wrap tab-wrap-aside" style="margin-top: 0;">
            <div class="section-title-aside left">
                <h4 style="color: green">RESERVAR</h4>
            </div>

            <div class="content-buy">

                <button class="btn btn-info" data-toggle="modal" data-target="#myQestion">REGISTRO<span class="icon-chat"></span></button>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">RESERVAS</button>

            </div>

            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxJnaq8H2Ib6E0bBT1sTnSnGZ5tqONxFI&callback=initMap"></script>


        </div>
    </div>
</div>

<div class="modal fade modal-book-now" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: green">Formulario de reserva</h4>
            </div>
            <div class="modal-body">

                <div class="preview-wrap">
                    <form action="{{ url('') }}/storeReservation" method="POST">
                        {{ csrf_field() }}
                        <div class="form-wrap-two">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="name" placeholder="Nombre" value="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="">
                            </div>
                            <div class="form-group">
                                <label>Tel&eacute;fono</label>
                                <input type="text" class="form-control" name="phone" placeholder="Numéro de teléfono" value="">
                            </div>
                            <div class="form-group">
                                <label>DNI</label>
                                <input type="text" class="form-control" name="skype" required pattern="[0-9]{8,8}" placeholder="DNI" value="">
                            </div>
                            <div hidden class="form-group">
                                <label>Nacionalidad</label>
                                <input type="text" class="form-control" name="nationality" placeholder="Pais" value="Perú">
                            </div>

                        </div>

                        <div class="form-wrap-two">
                            <div class="form-group">
                                <label>Horario</label>
                                <div class="row">
                                    <div class="col-sm-6"><input type="text" name="checkin" class="form-control datepicker" placeholder="De"></div>
                                    <div class="col-sm-6"><input type="text" name="checkout" class="form-control datepicker" placeholder="A"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Cantidad de personas</label>
                                <div class="row">
                                    <div class="col-sm-6"><input type="number" name="adults" class="form-control" placeholder="Adultos" value="1"></div>

                                </div>
                            </div>
                                <div class="form-group">
                                        <label>Descripci&oacute;n</label>
                                        <textarea name="message" rows="3" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-primary hvr-sweep-to-right" type="submit">Reservar</button>
                                <div hidden class="form-group">
                                    <label>Tipo de viaje</label>
                                    <select class="form-control" name="type">
                                        <option value="Viaje">Vacaciones</option>
                                        <option value="Viaje">Vacaciones</option>
                                        <option value="Viaje">Vacaciones</option>
                                        <option value="Viaje">Vacaciones</option>
                                    </select>
                                </div>
                                <div hidden class="form-group">
                                    <label>habitacion</label>
                                    <select class="form-control" name="hostel">
                                        <option value="habitacion">habitacion</option>
                                        <option value="habitacion">habitacion</option>
                                        <option value="habitacion">habitacion</option>
                                        <option value="habitacion">habitacion</option>
                                    </select>
                                </div>

                                <div hidden class="form-group">
                                    <label>guia </label>
                                    <div class="row">
                                        <div class="col-sm-4"><input type="radio" name="guide" value="guia"> <small>guia</small></div>
                                        <div class="col-sm-4"><input type="radio" name="guide" value="guia"> <small>guia</small></div>
                                        <div class="col-sm-4"><input type="radio" name="guide" value="guia"> <small>guia</small></div>
                                    </div>
                                </div>

                                <div hidden class="form-group">
                                    <label>plus</label>
                                    <select class="form-control" name="plus">
                                        <option value="plus1">plus1</option>
                                        <option value="plus1">plus2</option>
                                        <option value="plus1">plus3</option>
                                    </select>
                                </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-book-now" id="myQestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: green">Registro pasajero</h4>
            </div>
            <div class="modal-body">

                <div class="preview-wrap">
                    <div class="preview-img" style="background-image: url('{{url('')}}/img/files/lares.jpg')">


                          <div class="form-wrap">
                              <form action="{{ url('') }}/sendComment" method="POST">
                                  {{ csrf_field() }}
                                  <div class="form-group">
                                      <label>Nombre:</label>
                                      <input type="text" name="nameUser" class="form-control" placeholder="Ingrese su nombre" value="" required>
                                      <!--<input type="hidden" name="idTour" value="{{ $tours[0]->id }}">-->
                                      <input type="hidden" name="idTour" value="{{ $tours[0]->id }}">
                                  </div>
                                  <div class="form-group">
                                      <label>DNI</label>
                                      <input type="text" class="form-control" name="comment" required pattern="[0-9]{8,8}" placeholder="Ingrese su DNI" required>
                                  </div>
                                  <div class="form-group">
                                      <label>Email</label>
                                      <input type="email" name="email" class="form-control" placeholder="Ingrese su email" value="" required>
                                  </div>
                                  <button class="btn btn-primary hvr-sweep-to-right">Registro</button>

                              </form>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
  h4{
    color: #fff;

  }
  a{
    color: #000;
  }
  a:hover{
    color: #018416;
  }
  .panel-footer{
    background-color: #e6ece7;
  }
  ul#menu li {
    display:inline;
  }
footer{
  background-color: rgb(16,54,9);
}
</style>



<!--inicio del footer-->

<footer>

   <div class="footer-top wow fadeInUp animated" style="padding-top: 0px;" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;background-color: rgb(13,52,14)">



<div class="container-fluid">
 <div class="row" style="text-align: center; color: Gray;">

    <div class="col-xs-12 col-md-8">
     <div class="row" sty>


    <div class="col-xs-12 col-md-4">
           <h2><strong>Suscribete</strong></h2>

           <h5 style="color: #fff;">Suscríbase para tener noticias y notificaciones nuevas</h5>

             <form action="{{route('publicnewsletters.store')}}" method="post">
               {{ csrf_field() }}
               <?php $url = Request::path();?>
               <input type="hidden" name="language" value="{{$url}}">
               <input name='email' placeholder='example@mail.com' class="form-control text-center" type="email" style="width:90%">
               <button type="submit" class="btn-submit text-center " style="width:90%">Suscribirme ahora</button>
             </form>


     </div>

         <div class="col-xs-12 col-sm-6 col-md-4">
                     <br><br><br><br>
                     <a href="{{url('')}}/fr/tours/decouverte/High-Mountain"><img src="{{url('')}}/img/fb.jpg" height="40%" width="40%"></a>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-4">
                     <br><br><br>
                     <a href="{{url('')}}/fr/tours/decouverte/High-Mountain"><img src="{{url('')}}/img/twitter.png" height="40%" width="40%"></a>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-4">
                     <br>
                     <a href="{{url('')}}/fr/tours/decouverte/High-Mountain"><img src="{{url('')}}/img/instagram.png" height="40%" width="40%"></a>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-4">
         </div>
   </div>


  </div>
         <div class="col-xs-12 col-sm-6 col-md-4">
               <br><br><br><br>
               <a href="{{url('')}}/fr/tours/decouverte/High-Mountain"><img src="{{url('')}}/img/logo.png" height="40%" width="40%"></a>
         </div>


</div>

 </footer>
@endsection
