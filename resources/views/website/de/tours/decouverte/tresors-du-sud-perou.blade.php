@extends('website.partials.de.maintre')
@section('title', 'Trésors du sud Pérou')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'From the coast to Machu Picchu, this trip combines the main sites of Peru. You will start on the coast with the Ballestas Islands and the Huacachina oasis as well as Nasca and its mysterious lines. You will then continue your journey visiting the beautiful city of Arequipa and the Colca Canyon before heading for Lake Titicaca. Your trip will end with the must-see Cusco region and its Inca sites including the most famous place, the majestic citadel Machu Picchu.')

@section('translate')

    <!--<div class="top-header">
        <div class="wrap-top">
            <div class="info-top pull-left">
                <small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Appelez-nous maintenant: 00 51 84 247277</a></small>
            </div>
           <div class="language-top pull-right">
                <small class="top-element-language">Langue:</small>
                <a class="route-language" href="{{url('')}}/fr/tours/decouverte"><img class="img-lng" src="{{url('')}}/img/lng/fr.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/en/tours/decouverte"><img class="img-lng" src="{{url('')}}/img/lng/en.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/es/tours/decouverte"><img class="img-lng" src="{{url('')}}/img/lng/es.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/de/tours/decouverte"><img class="img-lng" src="{{url('')}}/img/lng/de.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/it/tours/decouverte"><img class="img-lng" src="{{url('')}}/img/lng/it.png" alt="Idioma"></a>
            </div>
        </div>
    </div>-->

@endsection

@section('content')


<div class="trip-detail">
    <div class="container">
        <div class="col-xs-12">
                    @include('flash::message')
                </div>
        <div class="col-md-9 tab-wrap">
            @foreach($tours as $tour)
            <h2>{{ $tour->title}}</h2>

            <div id="shop-detail">

                <!-- Shop item / START -->
                <div class="shop-item">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 450px">
                    	<ol class="carousel-indicators">
					      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					       @foreach($images as $gallery)
                            <li data-target="#myCarousel" data-slide-to="0"></li>
                            @endforeach
					      
					    </ol>
					    <div class="carousel-inner">
					      <div class="item active">
					        <img src="{{url('')}}/{{ $tour->coverpage }}"  style="width:100%; height: 450px;">
					      </div>
					      
					      @foreach($images as $gallery)
						      <div class="item">
						        <img src="{{url('')}}/{{ $gallery->routeImage }}" style="width:100%; height: 450px;">
						      </div>
						      
					    	@endforeach
					      
					    </div>
					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					      <span class="glyphicon glyphicon-chevron-left"></span>
					      <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#myCarousel" data-slide="next">
					      <span class="glyphicon glyphicon-chevron-right"></span>
					      <span class="sr-only">Next</span>
					    </a>
                    </div>


                </div><!-- Shop item / END -->

            </div>

            <div class="description">
                <h3>En quelques mots...</h3>
                <br>
                <p>{{ $tour->summary}}</p>
                
            </div>
            @endforeach
            <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#itenary">Itinéraire</a></li>
                <li class=""><a href="#overview">Organisation</a></li>
            </ul>
             <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" style="bottom:0px; right:0px;">
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_google_plus"></a>
                <a class="a2a_button_pinterest"></a>
            </div>
            <div class="tab-content paper-effect">
                <div class="tab-pane active" id="itenary">
                    @foreach($galleries as $gallery)
                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/{{ $gallery->routeImage}}" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">{{ $gallery->name }}</h4>
                            <p>{{ $gallery->description }}</p>

                            <!--<div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> 
                                  
                                   @for ($i = 0; $i < count($etapes); $i++)
                                        @if($gallery->id == $etapes[$i]->id_tour_gallery)
                                            <span class="city">{{ $etapes[$i]->nameEtape }}</span>
                                        @endif
                                   @endfor
                                </div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new">{{ $gallery->stay }}</a></div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong>{{ $gallery->transport }}</div>
                            </div>-->

                        </div>
                    </div>
                    @endforeach
                    

                    <h4>FIN DES NOS SERVICES</h4>

                </div>

                <div class="tab-pane" id="overview">
                    <div class="row">
                        @foreach($organizations as $orga)
                        <div class="col-sm-12">
                            <h4>{{ $orga->name}}</h4>
                            <p>{{ $orga->description }}</p>
                            <br>
                        </div>
                        @endforeach
                    </div>
                </div>

                

            </div>
        </div>

        <div class="col-md-3 tab-wrap tab-wrap-aside" style="margin-top: 0;">
            <div class="section-title-aside left">
                <h4>RÉSERVATIONS</h4>
            </div>
            <div class="resume">
                <small>Apartir de:</small><span class="pd price-cat"><i class="icon-money"></i> USD {{ $tours[0]->price}}</span>
            </div>
            <div class="resume">
                <small>Jours:</small><span class="pd days"><i class="icon-sun"></i>{{ $tours[0]->days}} J / <i class="icon-moon"></i>{{ $tours[0]->days - 1}} N</span>
            </div>
            <div class="content-buy">
                <div class="content-categories">
                    <div class="categories"><i class="icon-mountain"></i> <strong>Altitude:</strong></div><div class="categorie-detail"> 4500 msnm</div>
                    <div class="categories"><i class="icon-shoe"></i> <strong>Niveau:</strong></div><div class="categorie-detail"> {{ $tours[0]->difficulty }}</div>
                    <div class="categories"><i class="icon-backpack"></i> <strong>Séjour:</strong></div><div class="categorie-detail"> {{ $tours[0]->category }}</div>
                    <div class="categories"><i class="icon-hand-like"></i> <strong>Confort:</strong></div><div class="categorie-detail"> <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-half"></i></div>
                </div>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">RÉSERVER</button><button class="btn btn-info" data-toggle="modal" data-target="#myQestion"><span class="icon-chat"></span></button>
            </div>

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
                        zoom: 4,
                        center: {lat: -16.894652, lng: -70.8394439},
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

            <div id="map" style="height: 200px"></div>

            
        </div>
    </div>
</div>




<div class="modal fade modal-book-now" id="myBuy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Reserve maintenant</h4>
            </div>
            <div class="modal-body">

                <div class="preview-wrap">
                    <div class="preview-img" style="background-image: url('{{url('')}}/img/pay-img.jpg')"></div>

                    <div class="form-wrap">
                        <h4 class="text-center">Choisissez le mode de paiement:</h4>
                        <div style="width: 49%; display: inline-block; padding: 1em;">
                            <img src="{{url('')}}/img/safetypay.png" alt="" style="width: 100%;">
                        </div>
                        <div style="width: 49%; display: inline-block; padding: 1em;">
                            <img src="{{url('')}}/img/transferwise.png" alt="" style="width: 100%;">
                        </div>

                        <div style="width: 49%; display: inline-block; padding: 1em;">
                            <img src="{{url('')}}/img/paypal.png" alt="" style="width: 100%;">
                        </div>
                        <div style="width: 49%; display: inline-block; padding: 1em;">
                            <img src="{{url('')}}/img/vma.png" alt="" style="width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-book-now" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Reserve maintenant</h4>
            </div>
            <div class="modal-body">

                <div class="preview-wrap">
                    <form action="{{ url('') }}/storeReservation" method="POST">   
                        {{ csrf_field() }}
                        <div class="form-wrap-two">  
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="name" placeholder="Entrez votre nom" value="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Adresse e-mail" value="">
                            </div>
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Numéro de téléphone" value="">
                            </div>
                            <div class="form-group">
                                <label>Pseudo Skype</label>
                                <input type="text" class="form-control" name="skype" placeholder="ID Skype" value="">
                            </div>
                            <div class="form-group">
                                <label>Nationality</label>
                                <input type="text" class="form-control" name="nationality" placeholder="Pays" value="">
                            </div>
                            <div class="form-group">
                                <label>Durée</label>
                                <div class="row">
                                    <div class="col-sm-6"><input type="text" name="checkin" class="form-control datepicker" placeholder="De"></div>
                                    <div class="col-sm-6"><input type="text" name="checkout" class="form-control datepicker" placeholder="À"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nombre de personne</label>
                                <div class="row">
                                    <div class="col-sm-6"><input type="number" name="adults" class="form-control" placeholder="Personnes" value="1"></div>
                                    <div class="col-sm-6"><input type="number" name="Children" class="form-control" placeholder="D'enfants" value="0"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-wrap-two">

                                <div class="form-group">
                                    <label>Type de voyage</label>
                                    <select class="form-control" name="type">
                                        <option value="Vacance">Vacance</option>
                                        <option value="Voyage de noces">Voyage de noces</option>
                                        <option value="Voyage team building">Voyage team building</option>
                                        <option value="Autre">Autre</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Type d'hébergement</label>
                                    <select class="form-control" name="hostel">
                                        <option value="Maison Habitante">Maison Habitante</option>
                                        <option value="Standard (2**/B&B)">Standard (2**/B&B)</option>
                                        <option value="Confort / Chame 3***">Confort / Chame 3***</option>
                                        <option value="Luxe 4**** +">Luxe 4**** +</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Vous souhaitez les services d'un guide </label>
                                    <div class="row">
                                        <div class="col-sm-4"><input type="radio" name="guide" value="Francophone"> <small>Francophone</small></div>
                                        <div class="col-sm-4"><input type="radio" name="guide" value="Anglophone"> <small>Anglophone</small></div>
                                        <div class="col-sm-4"><input type="radio" name="guide" value="Hispanophone"> <small>Hispanophone</small></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Vous voulez plus</label>
                                    <select class="form-control" name="plus">
                                        <option value="Voyage regroupant les incontournables du pays">Voyage regroupant les incontournables du pays</option>
                                        <option value="Voyage aventure">Voyage aventure</option>
                                        <option value="Voyage Communauté">Voyage Communauté</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Décrivez votre voyage</label>
                                    <textarea name="message" rows="5" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-primary hvr-sweep-to-right" type="submit">Reserve</button>

                            
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
                <h4 class="modal-title">Pose une question</h4>
            </div>
            <div class="modal-body">

                <div class="preview-wrap">
                    <div class="preview-img" style="background-image: url('{{url('')}}/img/files/lares.jpg')"></div>

                    <div class="form-wrap">
                        <form action="{{ url('') }}/sendComment" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" name="nameUser" class="form-control" placeholder="Entrez votre nom" value="" required>
                                <input type="hidden" name="idTour" value="{{ $tours[0]->id }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Adresse e-mail" value="" required>
                            </div>

                            <div class="form-group">
                                <label>Question</label>
                                <textarea class="form-control" name="comment" placeholder="Écrivez vos questions sur ce voyage" required></textarea>
                            </div>
                            <button class="btn btn-primary hvr-sweep-to-right">Envoyez vos questions</button>

                        </form>
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
  background-color: rgb(23,58,27);
}
</style>



<!--inicio del footer-->

 <footer >
            
    <div class="footer-top wow fadeInUp animated" style="padding-top: 0px;" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;background-color: rgb(23,58,27)">
        


<div class="container-fluid">
  <div class="row" style="text-align: center; color: white;">
 
     <div class="col-xs-12 col-md-8">
      <div class="row" sty>
        <div class="col-xs-12">
            <h2><strong>TOURS</strong></h2>
        </div>
    
      </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                   <a href="{{url('')}}/fr/tours/decouverte/Aventure"><h4>Aventure</h4></a>
              <a href="{{url('')}}/fr/tours/decouverte/Aventure"><img src="{{url('')}}/img/Aventura.jpg" height="60%" width="60%"> 
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <a href="{{url('')}}/fr/tours/decouverte/High-Mountain"><h4>Haute Montagne</h4></a>
            <a href="{{url('')}}/fr/tours/decouverte/High-Mountain"><img src="{{url('')}}/images/Alta_montaña.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <a href="{{url('')}}/fr/tours/decouverte/Discover"><h4>Decouverte</h4></a>
              <a href="{{url('')}}/fr/tours/decouverte/Discover"><img src="{{url('')}}/images/Descubir.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{url('')}}/fr/tours/decouverte/Excursions"><h4>Excursions</h4></a>
                <a href="{{url('')}}/fr/tours/decouverte/Excursions"><img src="{{url('')}}/images/Excursiones.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
        </div>
    </div>
     <div class="col-xs-12 col-md-4">
            <h2><strong>S'inscrire</strong></h2>
        
            <h5 style="color: #fff;">Abonnez-vous pour rester à jour sur les nouvelles et les notifications</h5>
          
              <form action="{{route('publicnewsletters.store')}}" method="post">
            {{ csrf_field() }}
              <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input name='email' placeholder='example@mail.com' class="form-control text-center" type="email" style="width:90%">
              <button type="submit" class="btn-submit text-center" style="width:90%">Inscrivez-vous maintenant</button>
                  
          </form>
           
    </div>
  </div>
</div>
    </div>
 
    
  </footer>
@endsection
