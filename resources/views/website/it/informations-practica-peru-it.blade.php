@extends('website.partials.it.main')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
    <div class="top-header">
        <div class="wrap-top">
            div class="info-top pull-left">
                <small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Chiamami ora: 00 51 84 247277</a></small>
            </div>
            <div class="language-top pull-right">
                <small class="top-element-language">lingua:</small>
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
                        <h3 class="text-center title-aside">Articoli:</h3>
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
                        <h3 class="text-center  title-aside">Chi siamo</h3>
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
                        <h3 class="text-center  title-aside">Foto e Video</h3>
                        <div class="testimonial" id="">
                            <div class="content-gallery-aside">
                                <a href="#">
                                    <img class="gallery-aside" src="{{url('')}}/img/gallery/photos/10_1.jpg" alt="">
                                    <figcaption class="small">Titolo della foto</figcaption>
                                </a>
                            </div>
                            <div class="content-gallery-aside">
                                <a href="#">
                                    <img class="gallery-aside" src="{{url('')}}/img/gallery/photos/10_1.jpg" alt="">
                                    <figcaption class="small">Titolo della foto</figcaption>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-8">

                    <div class="main-title">
                        <h2>Informazioni pratiche</h2>
                        <p align="justify">TEMPO DI CAMBIO Da marzo a ottobre (ora estiva), sarà necessario invertire l'orologio 7 ore a venire in Perù, e solo 6 ore da novembre a febbraio. <br>
                        ELETTRICITÀ Tensione: 110 / 220V <br>
                        
                        Frequenza: 50/60 Hertz Perù Prese elettriche sono di due tipi: TELEFONO E TELECOMUNICAZIONI E 'molto facile comunicare con gli amici o la famiglia in Perù, cabine telefoniche sono numerose, e la copertura internet è molto buona. <br>
                        Per chiamare da Perù in Francia: 00 + 33 + numero corrispondente (senza iniziale 0). <br>

                        Per chiamare dalla Francia in Perù: 00 + 51 + codice della città (senza 0) + numero corrispondente. <br>

                        Per effettuare chiamate interne: il prefisso + il numero di zona se viene chiamato in un'altra area. Altrimenti, non comporre il codice di zona.
                        <br>
                        MAIL <br>
                        
                        Troverete le cassette postali in ogni aeroporto e nella grande maggioranza degli alberghi. Si consiglia comunque di preferire le stazioni centrali. Ci vogliono almeno 10 giorni per il destinatario di ricevere una lettera da Lima. <br>

                        ASSICURAZIONE VIAGGIO <br>

                        Uno specialista in assicurazione di viaggio da oltre 35 anni, l'assicurazione di viaggio AVI International gestisce più di 100.000 viaggiatori in tutto il mondo ogni anno. AVI International offre il "Routard Insurance", progettato in collaborazione con la Guide du Routard: a breve o lungo termine, con o senza franchigia, i tassi su misura in base alle vostre esigenze Altro> https: //www.avi -international.com/ Appatore = XA6TR</p>
                    </div>

                    

                    </div>

                </div>
            </div>
            

        </div>

    </div>

</section>

@endsection
