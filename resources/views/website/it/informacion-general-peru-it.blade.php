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
                        <h2>Informazioni generali</h2>
                        <p align="justify">PIl Perù ha:   <br>
                        • Una popolazione di circa 30 milioni. <br>
                        • PIL di 301,5 miliardi di dollari nel 2011. <br>
                        • Una superficie totale di 1.285.220 km², tre volte la superficie della Francia. <br>
                        • 2414 km di costa. <br>
                        • Un paese con un confine comune con il Cile, l'Argentina, il Brasile, l'Ecuador e la Bolivia. <br>
                        • Un paese con la vetta del Huascarán innevato, a 6768 metri sul livello del mare.     <br>
                        <br>
                        Una destinazione speciale: <br>
                        • Il Perù ha 28 delle 31 climi del mondo (in alcune parti del paese, il clima è soleggiato tutto l'anno) <br>
                        • 84 dei 104 ecosistemi del mondo sono presenti in Perù. <br>
                        • Il paese ha la seconda più alta catena montuosa del mondo. <br>
                        • Il Canyon Colca è il secondo canyon più profondo del mondo (due volte più profondo del Grand Canyon). <br>
                        • Il paese ha otto parchi nazionali e nove siti del patrimonio mondiale. <br>
                        <br>
                        Clima: con una grande diversità geografica, il Perù è soggetto a climi estremamente varia, determinati dall'altitudine e dalle stagioni. Ecco una presentazione di queste per regione: <br>
                        • La costa (Ica, Chiclayo, Lima, Trujillo e Tumbes): clima arido o deserto, il sole è molto presente da novembre a maggio. Le temperature attenuano il resto dell'anno e il cielo è spesso coperto dall'influenza della corrente marina "El Niño". <br>
                        • Regione Nord: clima caldo per tutto l'anno con picchi di calore a 35 ° C in estate. <br>
                        • Regioni centrali e meridionali: due stagioni ben segnalate: l'inverno (tra aprile e ottobre) e l'estate (da novembre a marzo). <br>
                        La Sierra (Ancash, Arequipa, Ayacucho, Cajamarca, Cusco e Puno): Questa regione ha due stagioni: l'inverno, tra aprile e ottobre; E l'estate da novembre a marzo. L'inverno è una stagione secca, mentre l'estate è piovosa. <br>

                        La giungla o la foresta pluviale (Iquitos, Madre de Dios e Manu): La Selva alta (foresta ad alta quota: circa 700 metri sul livello del mare) ha un clima subtropicale caratterizzato da piogge pesanti. La bassa foresta (meno di 700 metri) presenta due stagioni: l'inverno o la stagione secca (da aprile ad ottobre) con un clima soleggiato e caldo. Durante l'estate o la stagione delle piogge (da novembre a marzo), le docce sono più frequenti. <br>
                        <br>

                        La fauna e la flora: il Perù è un paese immensamente ricco di biodiversità. Attualmente conta più di 40.000 specie di piante, tra cui 3.000 specie di orchidee. I fiumi peruviani hanno 2000 specie di pesci, più dell'Oceano Atlantico. <br>

                        Più di 3700 specie di farfalle possono essere osservate nel paese, rappresentando un record mondiale. Il Perù ospita 1710 specie di uccelli elencati, di cui 300 sono endemici. Il mondo dei mammiferi è costituito da 32 specie di scimmie, jaguari, delfini d'acqua dolce rosa (porpoises) e otters giganti nella foresta pluviale; La fauna andina è composta da puma, lama, alpaca e vicuñas, senza dimenticare il condor, l'uccello più grande al mondo con i suoi 3,6 metri di ali. <br>
                        <br>

                        Gastronomia: Perù è conosciuta in tutto il Sud America per la diversità della sua gastronomia, fatta di una miscela di cucina spagnola e nativa. I viaggiatori gourmet avranno l'opportunità di provare specialità come: <br>
                        • Ceviche, piatto nazionale: pesce leggero o crudo, marinato in succo di limone! <br>
                        • Pisco Sour: una bevanda leggermente dolce e scintillante fatta da Pisco (alcool bianco d'uva), succo di lime, bianco d'uovo e ghiaccio tritato. Molto rinfrescante! <br>
                        • Coca-mate: un'infusione di foglie di coca (pianta andina) che aiuta la digestione ed è un rimedio efficace per i problemi di altitudine. <br> • Filetto di alpaca: tutto il sapore di una bistecca ma senza il colesterolo! <br>
                        • Lomo saltado: carne affettata con verdure e patatine, servita con riso
                        • La cavia, più comunemente chiamata cuy, cucinare nel forno con verdure. La sua carne è molto tenera e fragrante. <br>
                         • Gli anticuchos: brochettes di manzo sulla griglia, o manzo. <br>
                        E non dimenticate le varie varietà di frutta e verdura tropicali, da dove potrete gustare squisiti succhi di frutta freschi che possono essere goduti in tutti i mercati locali. </p>
                    </div>

                    

                    </div>

                </div>
            </div>
            

        </div>

    </div>

</section>

@endsection
