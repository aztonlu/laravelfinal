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
                        <h2>L'équipe Tierras de los Andes</h2>
                        <p>Direcci&oacute;n</p>
                    </div>

                    <div class="row">

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/director.jpg');">
                                    
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title">Etienne MOINE – Président Directeur</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small><p> Une motivation: le voyage et l’envie de découvrir de nouveaux horizons!!!</p> <p align="justify">Des études dans le tourisme et les loisirs sportifs, m’ont donné l’opportunité de poser ma valise au Pérou, un pays avec des richesses culturelles et naturelles impressionantes. Depuis Cusco, je crée des voyages qui vous feront vivre une aventure inoubliable. Passioné de sports de plein air, la cordillère des Andes est un immense terrain de jeu qui ne demande qu’à être découvert pendant mes temps libres.</p> <medium class="location"></medium>
                                        
                                    </div>

                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/gerente1.jpg');">
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title">Ricardo VALENCIA SALAS – General manager</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">Péruvien d’origine, je fus guide professionnel pendant 15 ans, accompagnant ainsi des voyages d’aventure mais aussi culturels au Pérou comme en Bolivie. J’utilise maintenant cette expérience, et cet enthousiasme pour créer et vous proposer les voyages les plus originaux au Pérou. Nous opérons du cœur des Andes, Cusco où est situé notre siège social.</p> <medium class="location"></medium>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>




                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/gerente2.jpg');">
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title">Carmen ARRÓSPIDE POBLETE – Gérante financière et administrative</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">Ingénieure civile, diplômée de l’Université San Antonio Abad de Cusco, avec une maitrise en Gestion du Patrimoine Culturel et Tourisme durable, je suis également guide officielle de Tourisme. J’aime profiter de mon temps libre pour explorer et découvrir continuellement les différentes cultures en compagnie de ma famille.</p> <medium class="location"></medium>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="row">

                        <div class="main-title">
                        <!--<h2>L'équipe Tierras de los Andes</h2>-->
                        <h2>  &nbsp;</h2>
                        <p>Ventes</p>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/perou-bolivie-express.jpg');">
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title">Emmanuelle  – Ventes</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">Passionnée par les voyages, j'ai naturellement suivi des études de tourisme. Après différentes expériences dans ce domaine en France et au Québec, c’est maintenant depuis le Pérou que je vous propose des voyages qui vous feront découvrir ce magnifique pays aux paysages variés et ses habitants chaleureux et accueillants.</p> <medium class="location"></medium>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/ventas2.jpg');">
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title">Victor – Ventes</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">Passionné de voyages et de sport c’est naturellement que j’en suis arrivé au monde du tourisme d’aventure. Aujourd’hui c’est depuis Cusco que je m’emploie à réaliser pour vous des voyages mémorables. La terre péruvienne dont je suis tombé sous le charme est riche d’histoire et de culture qu’il me plait aujourd’hui de faire partager.</p> <medium class="location"></medium>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>

                        </div>

                        <div class="row">

                        <div class="main-title">
                        <!--<h2>L'équipe Tierras de los Andes</h2>-->
                        <h2>  &nbsp;</h2>
                        <p>Reservations</p>
                        </div>
                        </div>


                        <div class="row">

                        <div class="main-title">
                        <!--<h2>L'équipe Tierras de los Andes</h2>-->
                        <h2>  &nbsp;</h2>
                        <p>Comptabilite</p>
                        </div>



                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/contabilidad1.jpg');">
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title">María Antonieta CARDENAS POBLETE – Externe</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">Ayant des connaissances en administration et ventes de produits d’Aventure, je réalise des travaux de soutien externe en matière de révision des comptes. Sur mes temps libres, j’aime lire et les randonnées à l’air libre.</p> <medium class="location"></medium>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                        </div>

                    </div>

                </div>
            </div>


        </div>

    </div>

</section>

@endsection
