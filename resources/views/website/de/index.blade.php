@extends('website.partials.de.main')
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
      	 <h4><p align="center" style="color: #4b4b4b">Andenländer werden auf der International Tourism Travel Show präsentiert, die am 20., 21. und 22. Oktober in Montreal, Kanada stattfinden wird!</p></h4>
    	<br>
        
        <div class="col-sm-12">
        	<center>
        		<a href="{{ URL::to('http://www.salontourismevoyages.com/') }}"><img src="img/feria1.jpg" class="img-rounded"></a>
          		<h3 style="color: #4b4b4b">20 - 21 - 22 Octobre 2017</h3>
            	<a href="{{ URL::to('http://www.google.com') }}" p> Internationale Reise-Tourismus-Show (Montreal, Kanada)</p></a>
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
      	<h2 align="center" style="color: #4b4b4b">Wie du gehst</h2>
      	 <br>
    	<br>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Group"><img src="{{url('')}}/img/grupo1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">In der Gruppe</h3></a>
            	<p>Eine Reise, die alle befriedigen wird</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Family"><img src="{{url('')}}/img/familia1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">Familie</h3></a>
            	<p>Nutzen Sie die passende Reise für Erwachsene und Jugendliche</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Couple"><img src="{{url('')}}/img/couple1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">Paar</h3></a>
            	<p>Partagez des moments inoubliables avec votre partenaire</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Friends"><img src="{{url('')}}/img/amigos1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">Unter Freunden</h3></a>
            	<p>Teilen Sie unvergessliche Momente mit Ihrem Partner</p>
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
          <h2>Bereiten Sie Ihre Reise vor</h2>
          <br>
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
                    <p>Allgemeine Informationen, Formalitäten, Gesundheit und Sicherheit, Was sollte ich mitbringen?, Beste Jahreszeit, Feiertage, Praktische Informationen.</p>
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
                        Informations générales <br>
                        <p align="center"> Allgemeine Informationen über Peru ist:</p> <br>
                         </p> <br>
                         • Eine Bevölkerung von etwa 30 Millionen. <br>
                         • Netto-Bankertrag von 301,5 Milliarden US-Dollar im Jahr 2011. <br>
                         • Eine Gesamtfläche von 1.285.220 km², dreimal so groß wie Frankreich. <br>
                         • 2414 km Küste. <br>
                         • Ein Land mit einer gemeinsamen Grenze zu Chile, Argentinien, Brasilien, Ecuador und Bolivien. <br>
                         • Ein Land mit dem Gipfel des Berges Huascarán auf 6768 Meter über dem Meeresspiegel. <br>
                         <br>
                         Ein besonderes Reiseziel: <br>
                         • Peru hat 28 der 31 Klimas auf dem Planeten (in einigen Landesteilen herrscht das ganze Jahr über ein sonniges Wetter) • 84 der 104 Ökosysteme der Welt sind in Peru vertreten.  <br></p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru2.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Gesundheit und Sicherheit<br>

                        Allgemein: In Peru ist es wichtig, einige Regeln für Hygiene und Gesundheit einzuhalten. Wir beraten Sie:
 
                        • Trinken Sie kein Leitungswasser, außer es wird gekocht oder mit Pellets gereinigt. <br>
                        • Waschen Sie Ihre Hände regelmäßig, um das Risiko einer Kontamination zu verringern. <br>
                        • Vermeiden Sie Fleisch und Fisch, die auf dem Markt gekauft werden. Bevorzugen Sie Restaurants, um Spezialitäten wie Ceviche zu probieren. <br>

                        Impfstoffe: Um aus Frankreich nach Peru einzureisen, ist kein Impfstoff erforderlich. Einige werden jedoch empfohlen: <br>
                        • Diphtherie-Tetanus-Poliomyelitis <br>
                        • Gelbfieber (Aufenthalt im Amazonasgebiet, obligatorisch bei einem Aufenthalt in Venezuela aus Peru) <br>
                        • Influenza (empfohlen für die zerbrechlichsten Personen, viele Fälle von Influenza AH1N1 in Peru) <br>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/peru3.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Was sollte ich mitbringen?<br>
                        Hier ist eine erschöpfende Liste von was während einer Reise nach Peru zu bringen ist <br>
 
Allgemein: - Eine Tasche oder eine weiche Tasche - Ein Rucksack von 20 bis 30 Liter - Bequeme Schuhe - Ein Hut oder eine Kappe - Sonnenbrille - Eine wasserdichte Gore Tex Jacke - Warme Kleidung für die Abende mit Höhe, Temperatur sinkt schnell - Ein Apotheke-Kit - Ein Schal oder Hals-Cover - Shorts oder pantacourts

                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru1.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Beste Jahreszeit, Feiertage <br>
                        Peru besteht auch aus so unterschiedlichen Regionen (Küste, Anden, Amazonien), die sich durch sehr unterschiedliche Klimate auszeichnen: <br>
                        • An der Küste zeigt der Südsommer (November bis April) hohe Temperaturen, während der Winter kühler (aber nie kalt) ist und von Morgennebel geprägt ist. <br>
                        • In den Anden und Amazonien gibt es zwei Hauptsaisons: die Trockenzeit (Mai bis Oktober) und die Regenzeit (November bis April). Wenn es während der Regenzeit möglich ist, in der Andenregion zu reisen, ist es nicht ratsam, in den Bergen zu wandern, wo Schneefälle die Wege gefährlich machen. <br>
                        • In den Anden kann das Wetter im Laufe eines Tages sehr variabel sein. Wir empfehlen Ihnen deshalb, verschiedene Kleidung, das heißt warm für die kühlen Abende, heller für Tage oft sonnig und eine Regenkleidung zu bieten. <br></p>

                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru2.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Praktische Informationen<br>
                        ZEITUNTERSCHIED Von März bis Oktober (Sommerzeit), dauert es Ihre Uhr 7 Stunden in Peru und 6 Stunden von November bis Februar Ankunft zurück. <br>
                        STROM Spannung: 110 / 220V
                        Frequenz: 50/60 Hertz Steckdosen in Peru sind von zwei Arten: TELEFON UND TELEKOMMUNIKATION Es ist sehr einfach, mit Freunden oder der Familie aus Peru zu kommunizieren, Telefonzellen sind viele, und sehr gute Internet-Abdeckung. <br>
                        So rufen Peru nach Frankreich: 00 + 33 + Nummer (ohne die erste 0). <br>
                        Um von Frankreich nach Peru zu nennen: 00 + 51 + Vorwahl (ohne 0) + Nummer. <br>
                        Um interne Anrufe: Vorwahl + Nummer, wenn in einer anderen Region genannt. Ansonsten wählen Sie nicht die Ortsvorwahl.
                        <br>
                        MAIL <br>

                        Sie finden Postfächer in jedem Flughafen und in der überwiegenden Mehrheit der Hotels. Wir empfehlen jedoch, die zentralen Stationen vorzuziehen. Es dauert mindestens 10 Tage für den Empfänger einen Brief von Lima zu erhalten. <br>

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
              <img class="img-responsive" src="img/11.jpg" alt="">
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
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Informations générales Bolivia</h3>
                  </div>
            <div class="modal-content">
              <div id="carousel-example-generic-bolvia" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/bolivia_portada.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Informations générales <br>
                        <p align="center"> Allgemeine Informationen über Peru ist:</p> <br>
                        • Eine Bevölkerung von etwa 30 Millionen. <br>
                         • Netto-Bankertrag von 301,5 Milliarden US-Dollar im Jahr 2011. <br>
                         • Eine Gesamtfläche von 1.285.220 km², dreimal so groß wie Frankreich. <br>
                         • 2414 km Küste. <br>
                         • Ein Land mit einer gemeinsamen Grenze zu Chile, Argentinien, Brasilien, Ecuador und Bolivien. <br>
                         • Ein Land mit dem Gipfel des Berges Huascarán auf 6768 Meter über dem Meeresspiegel. <br>
                         <br>
                         Ein besonderes Reiseziel: <br>
                         • Peru hat 28 der 31 Klimas auf dem Planeten (in einigen Landesteilen herrscht das ganze Jahr über ein sonniges Wetter) • 84 der 104 Ökosysteme der Welt sind in Peru vertreten. <br></p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia1.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                      Gesundheit und Sicherheit<br>

                        Allgemein: In Peru ist es wichtig, einige Regeln für Hygiene und Gesundheit einzuhalten. Wir beraten Sie:
 
                        • Trinken Sie kein Leitungswasser, außer es wird gekocht oder mit Pellets gereinigt. <br>
                        • Waschen Sie Ihre Hände regelmäßig, um das Risiko einer Kontamination zu verringern. <br>
                        • Vermeiden Sie Fleisch und Fisch, die auf dem Markt gekauft werden. Bevorzugen Sie Restaurants, um Spezialitäten wie Ceviche zu probieren. <br>

                        Impfstoffe: Um aus Frankreich nach Peru einzureisen, ist kein Impfstoff erforderlich. Einige werden jedoch empfohlen: <br>
                        • Diphtherie-Tetanus-Poliomyelitis <br>
                        • Gelbfieber (Aufenthalt im Amazonasgebiet, obligatorisch bei einem Aufenthalt in Venezuela aus Peru) <br>
                        • Influenza (empfohlen für die zerbrechlichsten Personen, viele Fälle von Influenza AH1N1 in Peru) <br> 

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/bolivia2.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                      <div> Was sollte ich mitbringen?<br>
                         Hier ist eine erschöpfende Liste von was während einer Reise nach Peru zu bringen ist<br>
                         
                        Allgemein: - Eine Tasche oder eine weiche Tasche - Ein Rucksack von 20 bis 30 Liter - Bequeme Schuhe - Ein Hut oder eine Kappe - Sonnenbrille - Eine wasserdichte Gore Tex Jacke - Warme Kleidung für die Abende mit Höhe, Temperatur sinkt schnell - Ein Apotheke-Kit - Ein Schal oder Hals-Cover - Shorts oder pantacourts
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia3.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Beste Jahreszeit, Feiertage <br>
                        Peru besteht auch aus so unterschiedlichen Regionen (Küste, Anden, Amazonien), die sich durch sehr unterschiedliche Klimate auszeichnen: <br>
                        • An der Küste zeigt der Südsommer (November bis April) hohe Temperaturen, während der Winter kühler (aber nie kalt) ist und von Morgennebel geprägt ist. <br>
                        • In den Anden und Amazonien gibt es zwei Hauptsaisons: die Trockenzeit (Mai bis Oktober) und die Regenzeit (November bis April). Wenn es während der Regenzeit möglich ist, in der Andenregion zu reisen, ist es nicht ratsam, in den Bergen zu wandern, wo Schneefälle die Wege gefährlich machen. <br></p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/boivia1.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                       ZEITUNTERSCHIED Von März bis Oktober (Sommerzeit), dauert es Ihre Uhr 7 Stunden in Peru und 6 Stunden von November bis Februar Ankunft zurück. <br>
                        STROM Spannung: 110 / 220V
                        Frequenz: 50/60 Hertz Steckdosen in Peru sind von zwei Arten: TELEFON UND TELEKOMMUNIKATION Es ist sehr einfach, mit Freunden oder der Familie aus Peru zu kommunizieren, Telefonzellen sind viele, und sehr gute Internet-Abdeckung. <br>
                        So rufen Peru nach Frankreich: 00 + 33 + Nummer (ohne die erste 0). <br>
                        Um von Frankreich nach Peru zu nennen: 00 + 51 + Vorwahl (ohne 0) + Nummer. <br>
                        Um interne Anrufe: Vorwahl + Nummer, wenn in einer anderen Region genannt. Ansonsten wählen Sie nicht die Ortsvorwahl.
                        <br>
                        MAIL <br>

                        Sie finden Postfächer in jedem Flughafen und in der überwiegenden Mehrheit der Hotels. Wir empfehlen jedoch, die zentralen Stationen vorzuziehen. Es dauert mindestens 10 Tage für den Empfänger einen Brief von Lima zu erhalten. <br>
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
            <h2>Wer wir sind ?</h2>
            <p>Tierras de los Andes ist eine S.A.C (Société Anonyme Fermée), die im Jahr 2000 ihre Pforten öffnete. Unser Hauptziel ist es, eine vollständige, abgelegene Tour durch Peru zu schaffen. </p>
            <p>Tierras de los Andes ist eine Agentur, die Aufenthalte organisiert und eine große Auswahl an Dienstleistungen und Dienstleistungen für Einzelpersonen oder Gruppen anbietet. Wir konzipieren jede Art von Aufenthalt, von der "Entdeckungsreise" zum Abenteuer-Trek, durch Geschäftsaufenthalte. Wir begrüßen Familien sowie Firmen aus der ganzen Welt, um Peru und ganz allgemein Südamerika zu entdecken.</p>
          </div>

        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Unser Geisteszustand</h2>
            <p>Tierras de los Andes bietet ein breites Leistungsspektrum von der Planung über die maßgeschneiderte Reisekoordination bis zum hochwertigen Kundenservice. Dieser peruanische Reiseveranstalter setzt auf ein Team von Fachleuten, die das Beste von sich geben, um den Reisenden den bestmöglichen Service zu bieten und somit die totale Zufriedenheit zu garantieren.</p>
            <p>Ein Abenteuergeist: Peru ist ein Paradies für Abenteuertourismus. Ob Sie die Berge erklimmen, auf alten Inka-Pfaden wandern, durch das Netz von Straßen, die das Land durchziehen, wandern oder Wildwasser-Rafting. Tierras de los Andes bietet Ihnen alle Arten von Abenteuerreisen je nach dem Niveau, das Sie suchen: Von extremem Adrenalin bis zu einfacheren Abenteuern für Amateure oder Enthusiasten.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Das Team Tierras de los Andes <a href="{{url('')}}/tours/decouverte/le-perou-en-famille"></a></h2>
          <br>
          <p> Erfahrung und Begeisterung zu schaffen und bieten Ihnen die originellsten Reisen nach Peru. Wir arbeiten aus dem Herzen der Anden, Cusco, wo unser Hauptsitz befindet</p>
          <br><br>
        </div>
      </div>
      <!--<div class="team-members">
        <div class="row">
        <div class="col-sm-12">
          @foreach($users as $user)
          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="{{ $user->routeImage }}" alt="">
              </div>
              <div class="member-info">
                <h3>{{ $user->name }}</h3>
                <h4>Director ejecutivo</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  @if($user->facebook != "")
                  <li><a class="facebook" href="{{ $user->facebook }}"><i class="fa fa-facebook"></i></a></li>
                  @endif
                  @if($user->twitter != "")
                  <li><a class="twitter" href="{{ $user->twitter }}"><i class="fa fa-twitter"></i></a></li>
                  @endif
                  @if($user->linkedin != "")
                  <li><a class="linkedin" href="{{ $user->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
          @endforeach
        </div>-->

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
                  <p> Ver contenido del blog</p></a>
                </div>
                @else
                <div class="item">
                    <a href="{{$blog->link}}"> <h4>{{$blog->name}}</h4>
                    <p>Ver contenido del blog </p></a>
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
          <h2>Über uns</h2>
          <p>Reiseerfahrungen mit uns teilen</p>
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
                      <span class="cetagory">in <strong>Alta Montaña</strong></span><!--TOUR???-->
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
                      <span class="cetagory">in <strong>Alta Montaña</strong></span><!--TOUR???-->
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
                      <span class="cetagory">in <strong>Alta Montaña</strong></span><!--TOUR???-->
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
          

      </div>

        <div class="heading text-center col-sm-8 col-sm-offset-2" style="margin-top:-35px">
          <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>

    </div>
        <div class="heading text-center col-sm-8 col-sm-offset-2">
            <br><br>
<button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#favoritesModal">
  Geben Sie Ihre Aussage ein
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
        id="favoritesModalLabel">Geben Sie Ihre Aussage ein</h4>
      </div>
             <div class="modal-body"> 

     <div style="padding:0 5 5 5">
          <h3>Geben Sie eine Testimonial ein</h3>
          <p></p>
        
                 <br>
          <form id="main2-contact-form" name="contact-form" method="post" action="{{ route('publictestimonials.store') }}" enctype="multipart/form-data">
             <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input type="hidden" name="status" value="disapproved">
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Nom" required="required" style="border: 2px solid #e6e6e6;">
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
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Geben Sie Ihre Aussage ein" style="border: 2px solid #e6e6e6;" required="required"></textarea>
                </div><br><br>
                <div class="form-group">
                  <button type="" class="btn-submit">Jetzt senden</button>
                </div>
              </form>
                 </div>
     
<br>
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
                <p> Anschrift: Calle Turquezas E-11 Urb. Kenedy A - CUSCO - PERU</p>
                <p> Telefonnummer: 00 51 84 247277</p>
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
                <p> Anschrift: Calle Bolivar 221 Oficina 4 1er piso Miraflores - LIMA - PERU</p>
                <p> Telefonnummer: 00 51 1 2434475</p>
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
        id="favoritesModalLabel">Kontaktieren Sie uns</h4>
      </div>
             <div class="modal-body"> 

     <div style="padding:0 5 5 5">
          <h3>Kontaktieren Sie uns</h3>
          <p></p>
        
                 <br>
          <form id="main2-contact-form" name="contact-form" method="post" action="{{ route('publictestimonials.store') }}" enctype="multipart/form-data">
             <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input type="hidden" name="status" value="disapproved">
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Nom" required="required" style="border: 2px solid #e6e6e6;">
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
                  <button type="" class="btn-submit">Envoyer</button>
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
                   <h4>Aventure</h4>
              <img src="images/Aventura.jpg" height="60%" width="60%" class="img-circle">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <h4>Haute Montagne</h4>
                <img src="images/Alta_montaña.jpg" height="60%" width="60%" class="img-circle">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <h4>Decouverte</h4>
              <img src="images/Descubir.jpg" height="60%" width="60%" class="img-circle">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                   <h4>Excursions</h4>
                <img src="images/Excursiones.jpg" height="60%" width="60%" class="img-circle">
            </div>
        </div>
    </div>
     <div class="col-xs-12 col-md-4">
            <h2><strong>Abonnieren</strong></h2>
        
            <h5 style="color: #fff;">Abonnieren Sie Neuigkeiten und Informationen über uns</h5>
          
              <form action="{{route('publicnewsletters.store')}}" method="post">
            {{ csrf_field() }}
              <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input name='email' placeholder='example@mail.com' class="form-control text-center" type="email" style="width:90%">
              <button type="submit" class="btn-submit text-center" style="width:90%">Jetzt abonnieren</button>
                  
          </form>
           
    </div>
  </div>
</div>
    </div>
    
  </footer>


  <!--fin  del footer-->








@endsection



