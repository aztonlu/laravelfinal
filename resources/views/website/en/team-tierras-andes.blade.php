@extends('website.partials.en.main')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
    <div class="top-header">

        <div class="wrap-top">

            <div class="info-top pull-left">
                <small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Call us: 00 51 84 247277</a></small>
            </div>
            <div class="language-top pull-right">
                <small class="top-element-language">Language:</small>
                <a class="route-language" href="{{url('')}}/fr"><img class="img-lng" src="{{url('')}}/img/lng/fr.png" alt="Idioma"></a>
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
                        <h3 class="text-center title-aside">Articles:</h3>
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
                        <h3 class="text-center  title-aside">Testimony</h3>
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
                        <h3 class="text-center  title-aside">Photos and videos</h3>
                        <div class="testimonial" id="">
                            <div class="content-gallery-aside">
                                <a href="#">
                                    <img class="gallery-aside" src="{{url('')}}/img/gallery/photos/10_1.jpg" alt="">
                                    <figcaption class="small">Title of the photo</figcaption>
                                </a>
                            </div>
                            <div class="content-gallery-aside">
                                <a href="#">
                                    <img class="gallery-aside" src="{{url('')}}/img/gallery/photos/10_1.jpg" alt="">
                                    <figcaption class="small">Title of the photo</figcaption>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-8">

                    <div class="main-title">
                        <h2>The team of Tierras de los Andes</h2>
                        <p>Director</p>
                    </div>

                    <div class="row">

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/director.jpg');">
                                    
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title">Etienne MOINE – Executive Director</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small><p> A motivation: the journey and the desire to discover new horizons !!!</p> <p align="justify">Studies in tourism and sports leisure, gave me the opportunity to put my suitcase in Peru, a country with impressive cultural and natural wealth. From Cusco, I think trips that will make you live an unforgettable adventure. Passionate about outdoor sports, the Andes is a huge playground that only needs to be discovered during my free time.</p> <medium class="location"></medium>
                                        
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
                                        <h4 class="title">Ricardo VALENCIA SALAS – General Manager</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">Peruvian native, I was a professional guide for 15 years, accompanying adventure travel but also cultural in Peru as in Bolivia. Now I use this experience, and this enthusiasm to create and offer you the most original trips in Peru. We operate from the heart of the Andes, Cusco, where our headquarters is located.</p> <medium class="location"></medium>
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
                                        <h4 class="title">Carmen ARRÓSPIDE POBLETE – Financial and Administrative Manager</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">Civil Engineer, graduated from the University of San Antonio Abad of Cusco, with masters in Management of Cultural Heritage and Sustainable Tourism, I am also an official tourist guide. I like to spend my free time exploring and continuously discovering different cultures in the company of my family.</p> <medium class="location"></medium>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="row">

                        <div class="main-title">
                        <!--<h2>L'équipe Tierras de los Andes</h2>-->
                        <h2>  &nbsp;</h2>
                        <p>Sales</p>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/perou-bolivie-express.jpg');">
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title">Emmanuelle  – Sales</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">Passionate about traveling, I naturally studied tourism. After several experiences in this field in France and Quebec, now it is from Peru that I propose trips that will make you discover this magnificent country with varied landscapes and its warm and welcoming inhabitants.</p> <medium class="location"></medium>
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
                                        <h4 class="title">Victor – Sales</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">Passionate about travel and sports is, of course, that I came to the world of adventure tourism. It is from Cusco that I am working to make memorable trips for you. The Peruvian land from which I fell under the spell is rich in history and culture that I like to share today.</p> <medium class="location"></medium>
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
                        <p>Accounting</p>
                        </div>



                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/contabilidad1.jpg');">
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title">María Antonieta CARDENAS POBLETE – Extern</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">I have knowledge of administration and sales of products of adventures, I realize external support for the review of accounts. In my free time, I like to read and walk outdoors.</p> <medium class="location"></medium>
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
