@extends('website.partials.it.main')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
    
@endsection

@section('content')

<!--<section id="NosVoyages" class="showcase">

    <div class="container">

        <div class="text-center our-services">
        <div class="row">
        <div class="col-sm-4">
            <div>
              <img src="images/descubrir.png" style="width: 70px; height: 90px">
            </div>
            <div class="service-info">
              <h3><a href="{{url('')}}/fr/tours/decouverte/Discover">Découverte </a> </h3>
              <p>Découvrir Le pays et ses incontournables en toute simplicité</p>
            </div>
                    </div>
        <div class="col-sm-4">
            <div>
              <img src="images/aventura.png" style="width: 90px; height: 90px">
            </div>
            <div class="service-info">
                <h3><a href="{{url('')}}/fr/tours/decouverte/Aventure">Aventure</a></h3>
              <p>Pour ceux qui aiment les trekkings dans des lieux encore autentiques et sauvages</p>
            </div>
                    </div>
                    <div class="col-sm-4">
               <div>
              <img src="images/Alta_montana.png" style="width: 90px; height: 90px">
            </div>
            <div class="service-info">
                <h3><a href="{{url('')}}/fr/tours/decouverte/High-Mountain">Haute montagne</a></h3>
              <p>Pour les  amoureux des hauts sommets et des nouveaux défis</p>
            </div>
                  </div>
                  </div>
                     <div class="row">

                    
                <div class="col-sm-12">
                 <div>
                  <img src="images/excursiones2.png" style="width: 140px; height: 100px">
                </div>
            <div class="service-info">
                <h3><a href="{{url('')}}/fr/tours/decouverte/Excursions">Excursions</a></h3>
              <p>Des visites dans les 4 coins du Pérou</p>
            </div>
                  </div>
                              
                  </div>
                  </div>
                  </div>

    </div>

</section>-->

<section id="imagenes-ferias" class="parallax" style="color: #4b4b4b" "padding-top:10px; padding-bottom: 10px">
    
    <div class="container">
      <div class="row">
      	<h2 align="center" style="color: #4b4b4b">Blog</h2>
      	 <br>
      	 <h4><p align="center" style="color: #4b4b4b">Tierras de los Andes sarà presente al Salone Internazionale del Turismo di Turismo che si terrà il 20 ottobre 21 e 22 a Montreal, in Canada!</p></h4>
    	<br>
        
        <div class="col-sm-12">
        	<center>
        		<a href="{{ URL::to('http://www.salontourismevoyages.com/') }}"><img src="img/feria1.jpg" class="img-rounded"></a>
          		<h3 style="color: #4b4b4b">20 - 21 - 22 Octobre 2017</h3>
            	<a href="{{ URL::to('http://www.google.com') }}" p>Salon International Tourisme Voyages (Montréal, Canada)</p></a>
        	</center>
        </div>
        
        
        
      </div>
    </div>
  </section>
  
  
<section id="about-us" class="parallax" style="color: #4b4b4b" "padding-top:10px; padding-bottom: 10px">
    <br>
    <br>
    
    <div class="container">
      <div class="row">
      	<h2 align="center" style="color: #4b4b4b">À mesure</h2>
      	 <br>
    	<br>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/it/tours/Group"><img src="img/grupo1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">Nel gruppo</h3></a>
            	<p>Un viaggio che soddisferà tutti</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/it/tours/Family"><img src="img/familia1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">Famiglia</h3></a>
            	<p>Godetevi un viaggio adatto per adulti e per i giovani</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/it/tours/Couple"><img src="img/couple1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">Paio</h3></a>
            	<p>Condividi momenti indimenticabili con il tuo partner</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/it/tours/Friends"><img src="img/amigos1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">Con gli amici</h3></a>
            	<p>Condividi momenti indimenticabili con il tuo partner</p>
        	</center>
        </div>
        
      </div>
    </div>
  </section>





  <section id="portfolio" style="padding-top:0px; padding-bottom: 0px">
      <br>
      <br>
      <br>
      <br>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Preparate il vostro viaggio</h2>
          <p></p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="img/peru_portada.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Peru</h3>
                    <p>Informazioni generali, Formalità, Salute e sicurezza, Cosa devo portare?, Migliore stagione, Vacanze, Informazioni pratiche.</p>
                  </div>
                  <div class="folio-overview">
                    <!--<span class="folio-link"><a class="folio-read-more" href=""><i class="fa fa-link"></i></a></span>-->

                    <span class="folio-expand"><a data-toggle="modal" data-target=".bs-example-modal-lg" class="course_more"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-header" style="background-color: #2a6f14">
                      <button type="button" data-dismiss="modal" align="rigth" style="border-color: transparent;background-color: transparent; color: #fff">&times;</button>
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Informations générales Pérou</h3>
                  </div>
            <div class="modal-content">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/peru1.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Informazioni generali  <br>
                        <p align="center"> Perù è:</p> <br>
                         • Una popolazione di circa 30 milioni. <br>
                         • Reddito bancario netto di 301,5 miliardi di dollari nel 2011
                         • Un'area totale di 1.285.220 km², tre volte l'area della Francia. <br>
                         • 2414 Km di costa. <br>
                         • Un paese che ha un confine comune con il Cile, l'Argentina, il Brasile, l'Ecuador e la Bolivia. <br>
                         • Un paese con la vetta del Monte Huascarán a 6768 metri sul livello del mare. <br>
                         <br>
                         Una destinazione speciale: <br>
                         • Il Perù ha 28 dei 31 climi del pianeta (in alcune parti del paese, il clima è soleggiato tutto l'anno) • 84 dei 104 ecosistemi del mondo sono presenti in Perù. <br></p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru2.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                         Salute e sicurezza<br>

                        Generale: In Perù, è importante rispettare alcune norme igieniche e sanitarie. Vi consigliamo di:
 
                        • Non bere acqua di rubinetto a meno che non sia bollita o purificata utilizzando pellet. <br>
                        • Lavare le mani regolarmente per ridurre il rischio di contaminazione. <br>
                        • Evitare di carne e pesce acquistati sul mercato: preferite i ristoranti a provare specialità come ceviche. <br>

                        Vaccini: Per entrare in Perù dalla Francia, nessun vaccino è obbligatorio. Alcuni comunque consigliati sono: <br>
                        • Dipolo-tetano-poliomielite <br>
                        • Febbre gialla (in caso di soggiorno nell'Amazzonia, obbligatorio in caso di soggiorno in Venezuela da El Peru)
                        • Influenza (raccomandata per i soggetti più fragili, molti casi di influenza AH1N1 rilevati in Perù) <br> <br>
 
                        Soggiorno in Amazzonia: oltre alla vaccinazione contro la febbre gialla, si può raccomandare un trattamento per la malaria (consultare il consiglio del medico) <br>


                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/peru3.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Cosa devo portare?<br>
                        Ecco un elenco esaustivo di cosa portare durante un viaggio in Perù <br>
 
                        Generale: - Una borsa o un sacchetto morbido - Un zaino da 20 a 30 litri - Scarpe comode - Un cappello o un tappo - Occhiali da sole - Una giacca impermeabile Gore Tex - Abbigliamento caldo per le serate con altitudine, la temperatura scende rapidamente - un kit di farmacia - un coperchio di sciarpa o collo - pantaloncini

                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru1.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Meilleure saison, Vacances <br>
                        Le Pérou est aussi constitué de régions aussi nombreuses que distinctes (côte, Andes, Amazonie) caractérisése par des climats très différents les uns des autres :  <br>  
                        • Sur la côte, l’été austral (novembre à avril) affiche de fortes températures, tandis que l’hiver est plus frais (mais jamais froid) et marqué par des brumes matinales.  <br>  
                        • Dans les Andes et en Amazonie, il existe deux saisons principales : la saison sèche (mai à octobre) et la saison humide (novembre à avril). S’il est tout à fait possible de voyager dans la région andine durant la saison des pluies, il est cependant fort déconseillé de randonner en montagne, où les chutes de neige rendant les sentiers dangereux.     <br>
                        • Dans les Andes, le temps peut être très changeant au cours d’une même journée. Nous vous conseillons donc de prévoir des vêtements variés, c'est-à-dire chauds pour les soirées fraîches, plus légers pour les journées souvent ensoleillés, et un vêtement de pluie.  <br><br>

                         Le Pérou se trouvant très proche de l’Equateur, le soleil y est vertical et fort. Ce phénomène est largement amplifié par l’altitude. N’oubliez donc pas de vous munir d’un chapeau, de crème solaire et de lunettes de soleil à fort indice de protection.</p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru2.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Informations pratiques<br>
                        FUSO ORARIO Da marzo a ottobre (ora estiva), ci vorrà di nuovo l'orologio 7 ore che arrivano in Perù, e 6 ore da novembre a febbraio. <br>
                        ELETTRICITÀ Tensione: 110 / 220V
                        Frequenza: 50/60 Hertz prese elettriche in Perù sono di due tipi: TELEFONO E TELECOMUNICAZIONI E 'molto facile comunicare con gli amici o la famiglia dal Perù, cabine telefoniche sono molti, e molto buona copertura internet. <br>
                        Per chiamare il Perù verso la Francia: 00 + 33 + numero (senza il primo 0). <br>
                        Per chiamare dalla Francia al Perù: 00 + 51 + prefisso locale (senza lo 0) + numero. <br>
                        Per effettuare chiamate interne: il prefisso + il numero di zona se viene chiamato in un'altra area. Altrimenti, non comporre il codice di zona.
                        <br>
                        MAIL <br>

                        Troverete cassette postali in tutti gli aeroporti e in maggior parte degli alberghi. Si consiglia comunque di preferire le stazioni centrali. Ci vogliono almeno 10 giorni per il destinatario di ricevere una lettera da Lima. <br>
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="img/bolivia_portada.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Bolivia</h3>
                    <p>Informations générales, Formalités, Santé et sécurité, Que dois-je apporter?, Meilleure saison, Vacances, Informations pratiques.</p>
                  </div>
                  <div class="col-sm-12">
                  <div class="folio-overview">
                    <!--<span class="folio-link"><a class="folio-read-more" href="#" data-single_url="info2.html" ><i class="fa fa-link"></i></a></span>-->
                     <span class="folio-expand"><a data-toggle="modal" data-target=".bs-example-modalBoliva-lg" class="course_more"><i class="fa fa-search-plus"></i></a></span>
                  </div>

                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade bs-example-modalBoliva-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-header" style="background-color: #2a6f14">
                      <button type="button" data-dismiss="modal" align="rigth" style="border-color: transparent;background-color: transparent; color: #fff">&times;</button>
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Informazioni generali </h3>
                  </div>
            <div class="modal-content">
              <div id="carousel-example-generic-bolvia" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/bolivia1.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        nformazioni generali  <br>
                        <p align="center"> Le Bolivia, è :</p> <br>
                        • Una popolazione di circa 30 milioni. <br>
                         • Reddito bancario netto di 301,5 miliardi di dollari nel 2011
                         • Un'area totale di 1.285.220 km², tre volte l'area della Francia. <br>
                         • 2414 Km di costa. <br>
                         • Un paese che ha un confine comune con il Cile, l'Argentina, il Brasile, l'Ecuador e la Bolivia. <br>
                         • Un paese con la vetta del Monte Huascarán a 6768 metri sul livello del mare. <br>
                         <br>
                         Una destinazione speciale: <br>
                         • Il Perù ha 28 dei 31 climi del pianeta (in alcune parti del paese, il clima è soleggiato tutto l'anno) • 84 dei 104 ecosistemi del mondo sono presenti in Perù.<br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia2.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                      Salute e sicurezza<br>

                        Generale: In Perù, è importante rispettare alcune norme igieniche e sanitarie. Vi consigliamo di:
 
                        • Non bere acqua di rubinetto a meno che non sia bollita o purificata utilizzando pellet. <br>
                        • Lavare le mani regolarmente per ridurre il rischio di contaminazione. <br>
                        • Evitare di carne e pesce acquistati sul mercato: preferite i ristoranti a provare specialità come ceviche. <br>

                        Vaccini: Per entrare in Perù dalla Francia, nessun vaccino è obbligatorio. Alcuni comunque consigliati sono: <br>
                        • Dipolo-tetano-poliomielite <br>
                        • Febbre gialla (in caso di soggiorno nell'Amazzonia, obbligatorio in caso di soggiorno in Venezuela da El Peru)
                        • Influenza (raccomandata per i soggetti più fragili, molti casi di influenza AH1N1 rilevati in Perù) <br> <br>
 
                        Soggiorno in Amazzonia: oltre alla vaccinazione contro la febbre gialla, si può raccomandare un trattamento per la malaria (consultare il consiglio del medico) <br>


                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/bolivia3.jpg" width="100%;" alt="...">
                      <div> Cosa devo portare? <br>
                        Ecco un elenco esaustivo di cosa portare durante un viaggio in Perù<br>
 
Generale: - Una borsa o un sacchetto morbido - Un zaino da 20 a 30 litri - Scarpe comode - Un cappello o un tappo - Occhiali da sole - Una giacca impermeabile Gore Tex - Abbigliamento caldo per le serate con altitudine, la temperatura scende rapidamente - un kit di farmacia - un coperchio di sciarpa o collo - pantaloncini
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="images/portfolio/peru.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Meilleure saison, Vacances <br>
                        Le Pérou est aussi constitué de régions aussi nombreuses que distinctes (côte, Andes, Amazonie) caractérisése par des climats très différents les uns des autres :  <br>  
                        • Sur la côte, l’été austral (novembre à avril) affiche de fortes températures, tandis que l’hiver est plus frais (mais jamais froid) et marqué par des brumes matinales.  <br>  
                        • Dans les Andes et en Amazonie, il existe deux saisons principales : la saison sèche (mai à octobre) et la saison humide (novembre à avril). S’il est tout à fait possible de voyager dans la région andine durant la saison des pluies, il est cependant fort déconseillé de randonner en montagne, où les chutes de neige rendant les sentiers dangereux.     <br>
                        • Dans les Andes, le temps peut être très changeant au cours d’une même journée. Nous vous conseillons donc de prévoir des vêtements variés, c'est-à-dire chauds pour les soirées fraîches, plus légers pour les journées souvent ensoleillés, et un vêtement de pluie.  <br><br>

                         Le Pérou se trouvant très proche de l’Equateur, le soleil y est vertical et fort. Ce phénomène est largement amplifié par l’altitude. N’oubliez donc pas de vous munir d’un chapeau, de crème solaire et de lunettes de soleil à fort indice de protection.</p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia1.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Informazioni pratiche<br>
                        FUSO ORARIO Da marzo a ottobre (ora estiva), ci vorrà di nuovo l'orologio 7 ore che arrivano in Perù, e 6 ore da novembre a febbraio. <br>
                        ELETTRICITÀ Tensione: 110 / 220V
                        Frequenza: 50/60 Hertz prese elettriche in Perù sono di due tipi: TELEFONO E TELECOMUNICAZIONI E 'molto facile comunicare con gli amici o la famiglia dal Perù, cabine telefoniche sono molti, e molto buona copertura internet. <br>
                        Per chiamare il Perù verso la Francia: 00 + 33 + numero (senza il primo 0). <br>
                        Per chiamare dalla Francia al Perù: 00 + 51 + prefisso locale (senza lo 0) + numero. <br>
                        Per effettuare chiamate interne: il prefisso + il numero di zona se viene chiamato in un'altra area. Altrimenti, non comporre il codice di zona.
                        <br>
                        MAIL <br>

                        Troverete cassette postali in tutti gli aeroporti e in maggior parte degli alberghi. Si consiglia comunque di preferire le stazioni centrali. Ci vogliono almeno 10 giorni per il destinatario di ricevere una lettera da Lima. <br>
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic-bolvia" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic-bolvia" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section>





  <section id="team" style="padding-top: 0px">
      <br>
      <br>
      <br>
      <br>
      
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Chi siamo?</h2>
            <p>Tierras de los Andes è un S.A.C, che ha aperto le sue porte nel 2000. Il nostro obiettivo principale è quello di creare una vacanza completa sulla pista battuta. </p>
             <p> Tierras de los Andes è un'agenzia che organizza soggiorni e offre una vasta gamma di servizi e servizi per la clientela individuale o di gruppo. Concepiremo qualsiasi tipo di soggiorno, dal viaggio "scoperto" all'avventura, attraverso soggiorni d'affari. Accogliamo famiglie e aziende provenienti da tutto il mondo per scoprire il Perù e più in generale l'America del Sud. </p>
          </div>

        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Il nostro stato d'trbajo </h2>
            <p>Tierras de los Andes offre una vasta gamma di servizi, dalle operazioni di pianificazione al coordinamento del viaggio su misura e al servizio clienti di qualità. Questo operatore turistico peruviano si affida a un team di professionisti che offrono il meglio di sé per garantire i migliori servizi possibili ai viaggiatori e garantire la completa soddisfazione. </p>
             <p> Uno spirito di avventura: il Perù è un paradiso per il turismo d'avventura. Se si arrampica le montagne, cammina sui sentieri antichi di Inca, attraversa la rete di strade che attraversano il paese o il rafting in acque bianche. Tierras de los Andes ti offre tutti i tipi di viaggi avventura a seconda del livello che stai cercando: dall'estrema adrenalina ad avventure più semplici per amatori o appassionati. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>La squadra Tierras de los Andes  <a href="{{url('')}}/tours/decouverte/le-perou-en-famille"></a></h2>
          <p>
              Esperienza e entusiasmo per creare e offrire i viaggi più originali in Perù. Operiamo dal cuore delle Ande, Cusco dove si trova la nostra sede principale.
          </p>
        </div>
      </div>
      
          <div class="col-sm-12">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="img/gruponuevo4.gif" alt="">
              </div>
              <div class="member-info">
                
              </div>
              
            </div>
          </div>
          <!--<div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/persona.png" alt="">
              </div>
              <div class="member-info">
                <h3>Carmen Arr&oacute;spide</h3>
                <h4>Gerente administrativa y financiera</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/persona.png" alt="">
              </div>
              <div class="member-info">
                <h3>Victor</h3>
                <h4>Ventas</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/persona.png" alt="">
              </div>
              <div class="member-info">
                <h3>Mar&iacute;a Cardenas</h3>
                <h4>Externe</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>-->
        </div>
      </div>
    </div>

  </section><!--se acaba modulo de nosotros-->    

  <div class="heading text-center col-sm-8 col-sm-offset-2">
<h2>Blog</h2>
</div>
  <section id="twitter" class="parallax">
     
    <div id="blogspace">
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev" style="margin-top: -220px;"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next" style="margin-top: -220px;"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div id="blogsec" class="col-sm-8 col-sm-offset-2">

            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                 <?php $count=0;?>
                @foreach($blogs as $blog)
                @if($count==0)
                <div class="item active">
                    <a href="{{$blog->link}}"> <h4>{{$blog->name}}</h4>
                 </a>
                </div>
                @else
                <div class="item">
                    <a href="{{$blog->link}}"> <h4>{{$blog->name}}</h4>
                    </a>
                </div>
                @endif
                <?php $count++;?>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#blog-->
  <section id="testimonial" style="padding-top: 0px; padding-bottom: 0px">
      
      <br>
      <br>
      <br>
      <br>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Testimonianze</h2>
          <br>
          <p align="center">
              condividere esperienze di viaggio con noi
          </p>
          <br>
        </div>
      </div>
     <!-- <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="images/blog/blog1.png" alt=""></a>
              </div>
            <div class="entry-header">
              <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
              <span class="date">Setiembre 22, 2017</span>
              <span class="cetagory">in <strong>Alta Monta&ntile;a</strong></span>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="images/blog/blog1.png" alt=""></a>
              </div>
            <div class="entry-header">
              <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
              <span class="date">Setiembre 22, 2017</span>
              <span class="cetagory">in <strong>Alta Monta&ntile;a</strong></span>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
          </div>-->
          <div class="col-sm-12 wow fadeInUp" data-wow-duration="10ms" data-wow-delay="10ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for($i=0;$i<count($testimonials)/3;$i++)
                @if($i==0)
                  <li data-target="#post-carousel" data-slide-to="{{$i}}" class="active"></li>
                @else
                  <li data-target="#post-carousel" data-slide-to="{{$i}}"></li>
                @endif
                    @endfor
                </ol>
                <div class="carousel-inner">
                    @for($i = 0; $i < count($testimonials); $i += 3) 
                    @if($i==0)
                    <div class="item active">
                    @else
                    <div class="item">
                    @endif
                    @if($i<count($testimonials))
                    <div class="col-sm-4">    
                    <div class="post-thumb">
                      <a href="#"><img class="img-responsive" src="{{$testimonials[$i]->photo}}" alt=""></a>
                      </div>
                    <div class="entry-header">
                      <h3><a href="#">{{$testimonials[$i]->name}}</a></h3>
                      <span class="date">{{$testimonials[$i]->date}}</span>
                      <span class="cetagory">
                    </div>
                    <div class="entry-content">
                      <p>{{$testimonials[$i]->testimonial}} </p>
                    </div>
                  </div>
                    @endif
                    @if($i+1<count($testimonials))
                        <div class="col-sm-4">
                        
                    <div class="post-thumb">
                      <a href="#"><img class="img-responsive" src="{{$testimonials[$i+1]->photo}}" alt=""></a>
                      </div>
                    <div class="entry-header">
                      <h3><a href="#">{{$testimonials[$i+1]->name}}</a></h3>
                      <span class="date">{{$testimonials[$i+1]->date}}</span>
                      <span class="cetagory">
                    </div>
                    <div class="entry-content">
                      <p>{{$testimonials[$i+1]->testimonial}} </p>
                    </div>
                  </div>
                    @endif
                    @if($i+2<count($testimonials))
                        <div class="col-sm-4">
                        
                    <div class="post-thumb">
                      <a href="#"><img class="img-responsive" src="{{$testimonials[$i+2]->photo}}" alt=""></a>
                      </div>
                    <div class="entry-header">
                      <h3><a href="#">{{$testimonials[$i+2]->name}}</a></h3>
                      <span class="date">{{$testimonials[$i+2]->date}}</span>
                      <span class="cetagory"></span>
                    </div>
                    <div class="entry-content">
                      <p>{{$testimonials[$i+2]->testimonial}} </p>
                    </div>
                  </div>
                    @endif
                    </div>
                    
                 @endfor
                </div>
                       
              </div>

            </div>
          
          </div>
          

      </div><br>

        <div class="heading text-center col-sm-8 col-sm-offset-2" style="margin-top:-35px">
          <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
    <br>
    </div>
        <div class="heading text-center col-sm-8 col-sm-offset-2">
<button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#favoritesModal">
  Inserisci la tua testimonianza
</button>
</div>
<div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">Inserisci la tua testimonianza</h4>
      </div>
             <div class="modal-body"> 

     <div style="padding:0 5 5 5">
          <h3>Inserisci la tua testimonianza</h3>
          <p></p>
        
                 <br>
          <form id="main2-contact-form" name="contact-form" method="post" action="{{ route('publictestimonials.store') }}" enctype="multipart/form-data">
             <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input type="hidden" name="status" value="disapproved">
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Nome" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                     <div class="col-sm-6">
                    <div class="form-group">
                      <input type="date" name="date" class="form-control" placeholder="Date" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                           </div>   
                    <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="nationality" class="form-control" placeholder="Nationalité" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                    <div class="col-sm-6">
                              <div class="form-group">
     <select name="tour" class="form-control">

        @foreach($tours as $tour) 
        <option value="{{ $tour->id }}" selected="selected" > {{ $tour->title }} </option> 
        @endforeach
         </div>
    </select>
                  </div>   
              </div>
                
                     <div class="col-sm-6">
                        <div class="form-group">
                                {!! Form::label('Iimagen', 'Imagen', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    <input id="imagen" type="file"  class="form-control" name="imagen" value="{{ old('imagen') }}" accept="image/png,image/gif,image/jpeg" onchange="readURL(this);">
                                </div>
                            </div>
                    </div>
                  </div>
                <div class="form-group">
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Inserisci la tua testimonianza" style="border: 2px solid #e6e6e6;" required="required"></textarea>
                </div>
                <div class="form-group">
                  <button type="" class="btn-submit">Invia ora</button>
                </div>
              </form>
                 </div>
     

 </div>
    </div>
</div>






  </section><!--/#testimonial-->

  <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" style="bottom:150px;">
    <a class="a2a_button_facebook"></a><br>
    <a class="a2a_button_twitter"></a><br>
    <a class="a2a_button_google_plus"></a><br>
    <a class="a2a_button_pinterest"></a><br>
</div>

<section id="map-section" style="padding-top: 10%;">
    <br>
    
      <center>
        <h2>Contient</h2>
      </center>
      <br>
      
      <div class="col-sm-12">
          
          
          <div class="col-sm-6">
            
            <div class="panel panel-default">
              <div class="panel-body">
                <center>
                   <div id="google-map" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"></div> 
                </center>
              </div>
              <div class="panel-footer" style="color: #000;">
                <p> indirizzo: Calle Turquezas E-11 Urb. Kenedy A - CUSCO - PERU</p>
                <p> Tel&eacute;fono: 00 51 84 247277</p>
                <p> Email: <a href="#"> terandes@terandes.com</a></p>
              </div>
            </div>
            
            
          </div>

          <div class="col-sm-6">
            
            <div class="panel panel-default">
              <div class="panel-body">
                
                  <div id="google-map1" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
                
              </div>
              <div class="panel-footer" style="color: #000;">
                <p> indirizzo: Calle Bolivar 221 Oficina 4 1er piso Miraflores - Lima - Perú</p>
                <p> Tel&eacute;fono: 00 51 1 2434475</p>
                <p> Email: <a href="#"> terandes@terandes.com</a></p>
              </div>
            </div>
            
            
          </div>

          
      </div>
      <div class="heading text-center col-sm-8 col-sm-offset-2">
<button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#contactModal">
  Nous Contacter
</button>
</div>
      
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
</section>


<div class="modal fade" id="contactModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">Contattaci</h4>
      </div>
             <div class="modal-body"> 

     <div style="padding:0 5 5 5">
          <h3>Contattaci</h3>
          <p></p>
        
                 <br>
          <form id="main2-contact-form" name="contact-form" method="post" action="{{ route('publictestimonials.store') }}" enctype="multipart/form-data">
             <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input type="hidden" name="status" value="disapproved">
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Nome" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                     
                    <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="nationality" class="form-control" placeholder="Nationalité" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                      
              </div>
                
                     
                  </div>
                <div class="form-group">
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Nous Contacter" style="border: 2px solid #e6e6e6;" required="required"></textarea>
                </div>
                <div class="form-group">
                  <button type="" class="btn-submit">Inviare</button>
                </div>
              </form>
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

 <footer >
            
    <div class="footer-top wow fadeInUp animated" style="padding-top: 0px;" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;background-color: rgb(13,52,14)">
        
           <!-- 
      <div class="container text-center">
        <div class="row">
          
       
        <div class="col-lg-18">
          <div class="col-sm-2" style="padding-top: 10%; padding-rigth:1pt">
            
              <a href="#"><img height="160%" width="160%" src="img/terandes-logo.png"  ></a>
            
          </div>
          
          <div class="col-sm-6" style="padding-left:2cm">
            <div class="col-sm-12">
              <h4>TOURS</h4>
            </div>
            <div class="col-sm-6" >
              <h4>Aventure</h4>
              <img src="images/Aventura.jpg" height="60%" width="60%" class="img-circle">
            </div>
            <div class="col-sm-6">
              <h4>Haute Montagne</h4>
                <img src="images/Alta_montaña.jpg" height="60%" width="60%" class="img-circle">
            </div>
            <div class="col-sm-6">
              <h4>Decouverte</h4>
              <img src="images/Descubir.jpg" height="60%" width="60%" class="img-circle">
            </div>
            <div class="col-sm-6">
              <h4>Excursions</h4>
                <img src="images/Excursiones.jpg" height="60%" width="60%" class="img-circle">
            </div>
            
          </div>
          <div class="col-sm-4">
            <h4>Suscribete</h4>
            <br>
            <h5 style="color: #fff;">Suscríbase para estar al tanto de noticias y notificaciones nuevas</h5>
            <center>
              <form action="{{route('publicnewsletters.store')}}" method="post">
            {{ csrf_field() }}
              <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input name='email' placeholder='example@mail.com' class="form-control text-center" type="email" style="width:230px" >
              <button type="" class="btn-submit text-center" style="background-color:#fff;width:300px;text-align: center;color:#000;margin-left:5px" >Suscribirme ahora</button>
                  
          </form>
            </center>
          </div>
        </div>
        
         </div>
      </div>
  
      -->

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
                   <h4>Avventura</h4>
              <a href="{{url('')}}/it/tours/decouverte/Aventure"><img src="images/Aventura.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <h4>Alte montagne</h4>
                <a href="{{url('')}}/it/tours/decouverte/High-Mountain"><img src="images/Alta_montaña.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <h4>Per scoprire</h4>
              <a href="{{url('')}}/it/tours/decouverte/Discover"><img src="images/Descubir.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                   <h4>Escursioni</h4>
                <a href="{{url('')}}/it/tours/decouverte/Excursions"><img src="images/Excursiones.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
        </div>
    </div>
     <div class="col-xs-12 col-md-4">
            <h2><strong>Abbonarsi</strong></h2>
        
            <h5 style="color: #fff;">Iscriviti a nuove notizie e notifiche</h5>
          
              <form action="{{route('publicnewsletters.store')}}" method="post">
            {{ csrf_field() }}
              <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input name='email' placeholder='example@mail.com' class="form-control text-center" type="email" style="width:90%">
              <button type="submit" class="btn-submit text-center" style="width:90%">Iscriviti ora</button>
                  
          </form>
           
    </div>
  </div>
</div>
    </div>
    
  </footer>


  <!--fin  del footer-->







@endsection



