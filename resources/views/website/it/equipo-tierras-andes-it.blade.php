@extends('website.partials.it.main')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
    <div class="top-header">

        <div class="wrap-top">

            <div class="info-top pull-left">
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
                        <h2>La squadra Tierras de los Andes</h2>
                        <p>Indirizzo</p>
                    </div>

                    <div class="row">

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/director.jpg');">
                                    
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title">Etienne MOINE – Direttore esecutivo</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small><p> Una motivazione: il viaggio e la voglia di scoprire nuovi orizzonti !!!</p> <p align="justify">Studi di turismo e di svago sportivo mi hanno dato l'opportunità di mettere la mia valigia in Perù, un paese con un'impressionante ricchezza culturale e naturale. Da Cusco, penso che viaggi che ti faranno vivere un'avventura indimenticabile. Appassionata di sport all'aperto, le Ande sono un enorme parco giochi che deve essere scoperto solo durante il mio tempo libero.</p> <medium class="location"></medium>
                                        
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
                                        <h4 class="title">Ricardo VALENCIA SALAS – Direttore Generale</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">Nativo peruviano, sono stata una guida professionale per 15 anni, accompagnando viaggi avventura ma anche culturali in Perù come in Bolivia. Adesso uso questa esperienza e questo entusiasmo per creare e offrire i viaggi più originali in Perù. Operiamo dal cuore delle Ande, Cusco, dove la nostra sede.</p> <medium class="location"></medium>
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
                                        <h4 class="title">Carmen ARRÓSPIDE POBLETE – Amministratore finanziario e amministrativo</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">Ingegnere civile, laureato presso l'Università di San Antonio Abad di Cusco, con maestri in gestione dei beni culturali e del turismo sostenibile, sono anche una guida turistica ufficiale. Mi piace spendere il mio tempo libero esplorando e scoprendo continuamente culture diverse in compagnia della mia famiglia.</p> <medium class="location"></medium>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="row">

                        <div class="main-title">
                        <!--<h2>L'équipe Tierras de los Andes</h2>-->
                        <h2>  &nbsp;</h2>
                        <p>Servizio Clienti</p>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/perou-bolivie-express.jpg');">
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title">Emmanuelle  – Servizio Clienti</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">Appassionato di viaggi, ho naturalmente studiato il turismo. Dopo diverse esperienze in questo settore in Francia e Quebec, ora è dal Perù che propongo viaggi che vi faranno scoprire questo magnifico paese con paesaggi vari e i suoi abitanti caldi e accoglienti.</p> <medium class="location"></medium>
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
                                        <h4 class="title">Victor – Servizio Clienti</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">AAppassionato di viaggi e sport è, ovviamente, che sono venuto nel mondo del turismo avventuroso. È da Cusco che sto lavorando per fare viaggi memorabili per te. La terra peruviana da cui sono caduto sotto l'incantesimo è ricca di storia e cultura che oggi mi piace.</p> <medium class="location"></medium>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>

                        </div>

                        <div class="row">

                        <div class="main-title">
                        <!--<h2>L'équipe Tierras de los Andes</h2>-->
                        <h2>  &nbsp;</h2>
                        <p>Prenotazioni</p>
                        </div>
                        </div>


                        <div class="row">

                        <div class="main-title">
                        <!--<h2>L'équipe Tierras de los Andes</h2>-->
                        <h2>  &nbsp;</h2>
                        <p>Contabilità</p>
                        </div>



                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/contabilidad1.jpg');">
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title">María Antonieta CARDENAS POBLETE – Esterno</h4>
                                        <br>
                                    </div>

                                    <div class="title">
                                        <small class="location"></small> <p align="justify">Ho conoscenza dell'amministrazione e delle vendite di prodotti di avventura, realizzo supporto esterno per la revisione dei conti. Nel mio tempo libero mi piace leggere e camminare all'aperto.</p> <medium class="location"></medium>
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
