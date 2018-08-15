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
                        <h2>Notre état d'esprit</h2>
                        <p align="justify">Tierras de los Andes offre un large panel de services, depuis la planification des opérations jusqu’à la coordination des voyages sur mesure en passant par un service clientèle de qualité. <br>
                        Ce tour operateur péruvien repose sur une équipe de professionnels donnant le meilleur d’eux-mêmes pour assurer les meilleurs services possibles aux voyageurs et garantir ainsi, une satisfaction totale.  <br><br>
                        Voyager avec Tierras de los Andes c’est:  <br>
                        Une réponse rapide: nous tentons de répondre aux demandes le plus rapidement possible.<br> Nous mettons tout en œuvre, pour que le voyageur puisse avoir une proposition en moins de 48h. <br>
                        Ainsi, il peut prendre le temps d’étudier celle-ci et d’y apporter des modifications s’il le souhaite.   
                        <br>Des prix compétitifs : nous nous efforçons de trouver les meilleurs services en termes de rapport qualité/prix. Ainsi, nous nous assurons de la qualité du service offert à un prix le plus abordable possible. <br>
                        <br>Constatez-le par vous même !
                        Une créativité continue : chaque itinéraire conçu, est le fruit d’une réflexion menée par notre équipe de production. 
                        <br>Leurs mots d’ordre sont : créativité, originalité, tout en respectant les populations locales et leurs cultures. Ils ne cessent de chercher de nouvelles idées d’itinéraires et de services pour pouvoir se démarquer nos concurrents. 

                        <br><br>Nous pouvons ainsi répondre à tout désir de voyage : un diner au clair de lune, la découverte de célèbres ruines, une visite privée d’un musée réalisée par le conservateur en personne tout comme l’opportunité de rencontrer des personnalités locales célèbres. <br>Nous sommes là, pour réaliser vos envies et vos rêves, et vous proposer une expérience unique. <br> <br>Un esprit Aventure : le Pérou est un paradis pour le Tourisme d’Aventure. <br>
                        Qu’il s’agisse de gravir les montagnes, de marcher sur d’anciens sentiers incas, de parcourir les réseaux de chemins qui sillonnent le pays, de pratiquer du rafting en eaux vives. <br><br>

                        Tierras de los Andes vous propose tout type de voyages d’Aventure selon le niveau recherché : <br>De l’extrême adrénaline aux aventures plus simples, pour amateurs ou passionnés.  <br>
                        Un contrôle de Qualité : notre démarche qualité que nous appliquons, soumet les guides à réaliser un rapport écrit après chaque circuit accompagné. De plus, nous demandons à chacun de nos clients de remplir un questionnaire pour juger le degré de satisfaction et ainsi avoir leurs remarques pour pouvoir faire évoluer constamment nos services.  <br>
                        Une infrastructure régionale : nous possédons un large réseau à travers le pays. Le siège social se trouve à Cusco et nous possédons une antenne à Lima. Ainsi, nous sommes directement sur place pour pouvoir assurer un service optimal. De plus, nous étendons nos activités en Bolivie et en Equateur où nous avons également nos bureaux.  
                        <br><br>
                        Les meilleurs guides : le guide est l’élément essentiel pour construire un voyage. Tierras de los Andes dispose d’un excellent réseau de guides nationaux et régionaux. Ils sont experts et passionnés en Histoire, Archéologie, Faune et Flore tout comme spécialistes des différentes cultures du Pérou. La majeure partie d’entre eux sont bilingues voir trilingues : Anglais, Français, Espagnol, Portugais, Allemand et Italien. Nous garantissons un réel échange de connaissances et ainsi plus qu’un voyage, une découverte poussée du Pérou.  
                        <br>
                        Assistance locale 24h/24 : nous sommes disponibles 24h/24, 7j/7 pour vous assurer une assistance complète à tout moment.  <br>
                        Protection de l’identité : nous garantissons à nos partenaires une totale protection de leur marque sur le terrain. Nous leur dédions si nécessaire de hauts standards de service par le biais de la mise en avant de vos logos, sur différents supports amovibles : étiquettes d’identification, pancartes aéroport et véhicules aux couleurs de votre marque pour signer vos voyages à l’arrivée des groupes.</p>
                    </div>


                    </div>

                </div>
            </div>

        </div>

    </div>

</section>

@endsection
