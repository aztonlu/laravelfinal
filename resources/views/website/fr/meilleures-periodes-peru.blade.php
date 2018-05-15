@extends('website.partials.main')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
    <div class="top-header">

        <div class="wrap-top">

            <div class="info-top pull-left">
                <small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Appelez-nous maintenant: 00 51 84 247277</a></small>
            </div>

            <div class="language-top pull-right">
                <small class="top-element-language">Langue:</small>
                <a class="route-language" href="{{url('')}}"><img class="img-lng" src="{{url('')}}/img/lng/fr.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/en"><img class="img-lng" src="{{url('')}}/img/lng/en.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/es"><img class="img-lng" src="{{url('')}}/img/lng/es.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/de"><img class="img-lng" src="{{url('')}}/img/lng/de.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/it"><img class="img-lng" src="{{url('')}}/img/lng/it.png" alt="Idioma"></a>
            </div>

        </div>

    </div>
@endsection

@section('content')


<section class="showcase">

    <div class="container">

        <div class="row item">

            <div class="container">

                <div class="col-md-4 aside-home">

                    <!--Articles-->

                    <div class="col-md-12">
                        <h3 class="text-center title-aside">Des articles</h3>
                        <div class="post-list-sldr testimonial">

                            <div class="col-md-12">

                                <div class="post-img-sldr" style="background-image: url('{{url('')}}/img/blog/rendez.jpg')">
                                </div>
                                <div class="post-summary-sldr">
                                    <header>
                                        <h4 class="post-title-sldr">
                                            <a href="#">Rendez-vous en terre inconnue : Arthur chez les quechuas des And</a>
                                        </h4>
                                        <p class="byline author vcard">
                                            <span class="italic">By</span>&nbsp;
                                            <a href="#" rel="author">Aaron D. Cullen</a>
                                            <span class="dot">·</span>
                                            <span class="updated">02/10/2016</span>
                                        </p>
                                    </header>

                                    <div class="post-excerpt">
                                        Tierras de los Andes est fière d'avoir participé à la réalisation de l'émission Rendez-vous en terre...
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="post-img-sldr" style="background-image: url('{{url('')}}/img/home_img/ausangate2.jpg')">
                                </div>
                                <div class="post-summary-sldr">
                                    <header>
                                        <h4 class="post-title-sldr">
                                            <a href="#">Jours</a>
                                        </h4>
                                        <p class="byline author vcard">
                                            <span class="italic">By</span>&nbsp;
                                            <a href="#" rel="author">Victor S.</a>
                                            <span class="updated">02/10/2016</span>
                                        </p>
                                    </header>

                                    <div class="post-excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hadis quaerat quas saepe? consectetur adipisicing elit.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Testimonials-->

                    <div class="col-md-12">
                        <h3 class="text-center  title-aside">Témoignages</h3>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="name">Pregnolato Tomas</div>
                                <div class="rating">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star-half"></span>
                                </div>
                                <div class="post-excerpt">
                                  Viaggio in Peru' Bolivia Cile dal 6/03/17 al 30/03/17 organizzato da Tierras de los Andes. Un grazie particolare per il programma che Alessandro Baldelli responsabile di...
                                </div>
                            </div>

                            <div class="testimonial-content">
                                <div class="name">Laye</div>
                                <div class="rating">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <div class="post-excerpt">
                                    Bonjour RICARDO JE VIENS VOUS REDIRE COMBIEN NOTRE VOYAGE DANS VOTRE MAGNIFIQUE PAYS ÉTAIT TRÈS BIEN ORGANISE tout était parfait: guides extraordinaires; chauffeur; bus...
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Gallery-->

                    <div class="col-md-12">
                        <h3 class="text-center  title-aside">Photos et Videos</h3>
                        <div class="testimonial" id="">
                            <div class="content-gallery-aside">
                                <a href="#">
                                    <img class="gallery-aside" src="{{url('')}}/img/gallery/photos/10_1.jpg" alt="">
                                    <figcaption class="small">Titre de la photo</figcaption>
                                </a>
                            </div>
                            <div class="content-gallery-aside">
                                <a href="#">
                                    <img class="gallery-aside" src="{{url('')}}/img/gallery/photos/10_1.jpg" alt="">
                                    <figcaption class="small">Titre de la photo</figcaption>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-8">

                    <div class="main-title">
                        <h2>Meilleures périodes pour venir</h2>
                        <p align="justify">Le Pérou est aussi constitué de régions aussi nombreuses que distinctes (côte, Andes, Amazonie) caractérisése par des climats très différents les uns des autres :  <br>  
                        • Sur la côte, l’été austral (novembre à avril) affiche de fortes températures, tandis que l’hiver est plus frais (mais jamais froid) et marqué par des brumes matinales.  <br>  
                        • Dans les Andes et en Amazonie, il existe deux saisons principales : la saison sèche (mai à octobre) et la saison humide (novembre à avril). S’il est tout à fait possible de voyager dans la région andine durant la saison des pluies, il est cependant fort déconseillé de randonner en montagne, où les chutes de neige rendant les sentiers dangereux.     <br>
                        • Dans les Andes, le temps peut être très changeant au cours d’une même journée. Nous vous conseillons donc de prévoir des vêtements variés, c'est-à-dire chauds pour les soirées fraîches, plus légers pour les journées souvent ensoleillés, et un vêtement de pluie.  <br><br>

                         Le Pérou se trouvant très proche de l’Equateur, le soleil y est vertical et fort. Ce phénomène est largement amplifié par l’altitude. N’oubliez donc pas de vous munir d’un chapeau, de crème solaire et de lunettes de soleil à fort indice de protection.</p>
                    </div>

                    
                    </div>

                </div>
            </div>
            

        </div>

    </div>

</section>

@endsection
