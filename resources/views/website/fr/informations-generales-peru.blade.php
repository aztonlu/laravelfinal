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
                                    onjour RICARDO JE VIENS VOUS REDIRE COMBIEN NOTRE VOYAGE DANS VOTRE MAGNIFIQUE PAYS ÉTAIT TRÈS BIEN ORGANISE tout était parfait: guides extraordinaires; chauffeur; bus...
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
                        <h2>Le Pérou informations générales</h2>
                        <p align="justify">Le Pérou, c’est :   <br>
                        • Une population d’environ 30 millions d’habitants. <br>
                        • Un PNB de $301.5 milliards de dollars en 2011. <br>
                        • Une surface totale de 1 285 220 km², soit trois fois la superficie de la France. <br>
                        • 2414 Km de côte. <br>
                        • Un pays ayant frontière commune avec le Chili, l’Argentine, le Brésil, l’Équateur et la Bolivie. <br>
                        • Un pays ayant comme point culminant le mont Huascarán, à 6768 mètres d’altitude.     <br>
                        <br>
                        Une destination à part :   <br>
                        • Le Pérou possède 28 des 31 climats présents sur la planète (dans certaines régions du pays, le temps est ensoleillé toute l’année) • 84 des 104 écosystèmes du monde sont présents au Pérou. <br>
                        • Le pays possède la deuxième chaîne de montagne la plus haute au monde. <br>
                        • Avec ses 1500 mètres de dénivelé, le canyon de Colca est le deuxième canyon le plus profond au monde (deux fois plus profond que le Grand Canyon). <br>
                        • Le pays compte huit parcs nationaux et neuf sites classés au patrimoine mondial de l’Humanité.     <br>
                        <br>
                        Le climat :   Ayant une grande diversité géographique, le Pérou est sujet à des climats extrêmement variés déterminés par l’altitude et les saisons. Voici une présentation de ceux-ci par région :   <br>
                        • La côte (Ica, Chiclayo, Lima, Trujillo et Tumbes) : climat désertique ou tropical aride, le soleil y est très présent de Novembre à Mai. Les températures s’adoucissent le reste de l’année, et le ciel est souvent couvert du à l’influence du courant marin « El Niño ».   <br>
                        • Région septentrionale : climat chaud durant toute l’année avec des pics de chaleur atteignant les 35°C en été. <br>
                        • Région centrale et méridionale : deux saisons bien marquées : l’hiver (entre avril et octobre) et l’été (entre novembre et mars).   <br>
                        La Sierra (Ancash, Arequipa, Ayacucho, Cajamarca, Cusco et Puno) :  Cette région compte deux saisons : l’hiver, entre avril et octobre ; et l’été de novembre à mars. L’hiver est une saison sèche, tandis que l’été est pluvieux.   <br>

                        La Selva ou forêt tropicale (Iquitos, Madre de Dios et Manu) : La Selva alta (forêt d’altitude : environ 700 mètres d’altitude) possède un climat subtropical caractérisé par de fortes pluies. La forêt basse (en dessous de 700 mètres d’altitude) présente quant à elle deux saisons : l’hiver ou saison sèche (d’avril à octobre) avec un climat ensoleillé et chaud. Pendant l’été ou saison des pluies (de novembre à mars), les averses sont plus fréquentes. <br>
                        <br>
                        La faune et la flore:   Le Pérou est un pays immensément riche en termes de biodiversité. Il possède actuellement plus de 40.000 espèces de plantes, dont 3000 espèces d’orchidées.  Les rivières péruviennes comptent 2000 espèces de poissons, plus que n’en compte l’océan Atlantique. <br>
                        Plus de 3700 espèces de papillons peuvent être observées dans le pays, ce qui représente un record mondial.  Le Pérou abrite 1710 espèces d’oiseaux répertoriés, dont 300 sont endémiques. Le monde des mammifères est constitué de 32 espèces de singes, de jaguars, de dauphins roses d’eau douce (botos) et des loutres géantes pour ce qui est de la forêt tropicale ; la faune andine, quant à elle, est composée de pumas, de lamas, d’alpagas et de vigognes, sans oublier le condor, plus grand oiseau du monde avec ses 3,6 mètres d’envergure.    <br>
                        <br>
                        Gastronomie :   Le Pérou est connu dans toute l’Amérique du Sud pour la diversité de sa gastronomie, faite d’un mélange de cuisine espagnole et indigène. Les voyageurs gastronomes auront l’occasion de gouter à des spécialités dont : <br>  
                        • Le Ceviche, plat national : poisson légèrement cuit ou cru, mariné dans du jus de citron vert ! <br>  
                        • Le Pisco Sour : une boisson légèrement sucrée et mousseuse réalisée à base de Pisco (alcool de raisin blanc), de jus de citron vert, d’un blanc d’œuf et de glace pilée. Très rafraichissant ! <br>  
                        • Le mate de coca : une infusion de feuille de coca (plante des Andes) qui aide à la digestion et constitue un remède efficace contre les problèmes d’altitude.   • Le filet d’alpaga : toute la saveur d’un bifteck mais sans cholestérol !  <br> 
                        • Le lomo saltado : émincé de bœuf revenu avec des légumes et des frites, servi avec du riz  <br>
                        • Le cochon d’Inde, plus communément appelé cuy, qui se cuisine au four avec des légumes. Sa chair est très tendre et parfumée.  <br> 
                        • Les anticuchos : brochettes de cœur de bœuf grillé, ou de viande de bœuf.  <br>
                         Et n’oublions pas les nombreuses variétés de fruits et légumes tropicaux, dont on tire de délicieux jus de fruits frais qu’il est possible de déguster sur tous les marchés locaux. </p>
                    </div>

                    

                    </div>

                </div>
            </div>
            

        </div>

    </div>

</section>

@endsection
