@extends('website.partials.maindescubrirnuevofr')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
  <!--<div class="top-header">

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

    </div>-->
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
      	 <h4><p align="center" style="color: #4b4b4b">Tierras de los Andes sera présent sur le salon international Tourisme Voyages qui se dÈroulera le 20, 21 et 22 octobre ‡ Montreal, Canada !</p></h4>
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
        		<a href="{{url('')}}/fr/tours/Group"><img src="img/grupo1icono.png" class="img-rounded"></a>
          		<a href="{{url('')}}/fr/tours/Group"><h3 style="color: #4b4b4b">En groupe</h3></a>
            	<p>Un voyage qui satisfera tout le monde</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Family"><img src="img/familia1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">En famille</h3></a>
            	<p>Profitez d'un voyage adapté pour les adultes ainsi que pour les jeunes</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Couple"><img src="img/couple1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">Couple</h3></a>
            	<p>Partagez des moments inoubliables avec votre partenaire</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Friends"><img src="img/amigos1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">Friends</h3></a>
            	<p>Renforcez votre complicité en partant vers de nouvelles aventures !</p>
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
          <h2>Préparez votre voyage</h2>
          <br><br><br>
          
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
                    <p>Informations générales, Formalités, Santé et sécurité, Que dois-je apporter?, Meilleure saison, Vacances, Informations pratiques.</p>
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
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
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
                        <p align="justify"> Le Pérou, c’est :</p> <br>
                        <p align="justify">• Une population d’environ 30 millions d’habitants. <br>
                        • Un PNB de $301.5 milliards de dollars en 2011. <br>
                        • Une surface totale de 1 285 220 km², soit trois fois la superficie de la France. <br>
                        • 2414 Km de côte. <br>
                        • Un pays ayant frontière commune avec le Chili, l’Argentine, le Brésil, l’Équateur et la Bolivie. <br>
                        • Un pays ayant comme point culminant le mont Huascarán, à 6768 mètres d’altitude.     <br>
                        <br>
                        Une destination à part :   <br>
                        • Le Pérou possède 28 des 31 climats présents sur la planète (dans certaines régions du pays, le temps est ensoleillé toute l’année) • 84 des 104 écosystèmes du monde sont présents au Pérou. <br></p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru2.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        <p align="center">Santé et sécurité<br></p>

                        <p align="center">Généralités : Au Pérou, il est important de respecter quelques règles d’hygiène et de santé. Nous vous conseillons donc de :<br>
 
                        • Ne pas boire l’eau du robinet, sauf si elle est bouillie ou purifiée à l’aide de pastilles. <br>
                        • Vous laver régulièrement les mains pour limiter les risques de contaminations. <br>
                        • Éviter la viande et le poisson achetés sur les marchés : préférez les restaurants pour goûter aux spécialités telles que le ceviche.  <br><br>

                        Vaccins : Pour entrer au Pérou depuis la France, aucun vaccin n’est obligatoire. Certains sont cependant recommandés notamment les suivants :<br>
                        • Diphtérie-tétanos-poliomyélite<br>
                        • Fièvre jaune (en cas de séjour en Amazonie, et qui est obligatoire en cas de séjour  au Vénézuela depuis el Pérou) <br>
                        • Grippe (recommandée pour les sujets les plus fragiles, de nombreux cas de grippe AH1N1 ayant été détectés au Pérou)<br><br>
 
                        Séjour en Amazonie : En plus d’une vaccination contre la fièvre jaune, un traitement contre le paludisme peut être recommandé (consulter l’avis de votre médecin)  <br></p>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/peru3.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        <p>Que dois-je apporter?<br></p>
                        <p>Voici une liste exhaustive de ce qu’il faut apporter lors d’un voyage au Pérou <br>
 
                        Général : - Une valise ou un sac souple - Un sac à dos de 20 à 30 litres - Des chaussures confortables - Un chapeau ou casquette - Des lunettes de soleil - Une veste imperméable de type Gore Tex - Des vêtements chauds pour les soirées, car avec l’altitude, la température chute vite - Une trousse à pharmacie - Un foulard ou cache cou - Shorts ou pantacourts</p>

                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru1.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                       <p> Meilleure saison, Vacances <br></p>
                        <p>Le Pérou est aussi constitué de régions aussi nombreuses que distinctes (côte, Andes, Amazonie) caractérisése par des climats très différents les uns des autres :  <br>  
                        • Sur la côte, l’été austral (novembre à avril) affiche de fortes températures, tandis que l’hiver est plus frais (mais jamais froid) et marqué par des brumes matinales.  <br>  
                        • Dans les Andes et en Amazonie, il existe deux saisons principales : la saison sèche (mai à octobre) et la saison humide (novembre à avril). S’il est tout à fait possible de voyager dans la région andine durant la saison des pluies, il est cependant fort déconseillé de randonner en montagne, où les chutes de neige rendant les sentiers dangereux.     <br>
                        • Dans les Andes, le temps peut être très changeant au cours d’une même journée. Nous vous conseillons donc de prévoir des vêtements variés, c'est-à-dire chauds pour les soirées fraîches, plus légers pour les journées souvent ensoleillés, et un vêtement de pluie.  <br>

                         Le Pérou se trouvant très proche de l’Equateur, le soleil y est vertical et fort. Ce phénomène est largement amplifié par l’altitude. N’oubliez donc pas de vous munir d’un chapeau, de crème solaire et de lunettes de soleil à fort indice de protection.</p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru2.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        <p>Informations pratiques<br></p>
                        <p>DÉCALAGE HORAIRE De mars à octobre (heure d’été), il faudra reculer votre montre de 7 heures en arrivant au Pérou, et de 6 heures seulement de novembre à février.   <br>
                        ÉLECTRICITÉ Voltage : 110/220V  <br>
                        Fréquence : 50/60 Hertz Les prises électriques au Pérou sont de deux types :  TÉLÉPHONE ET TÉLÉCOMMUNICATIONS Il est très facile de communiquer avec ses amis ou sa famille depuis le Pérou, les cabines téléphoniques étant nombreuses, et la couverture internet très bonne. <br>
                        Pour appeler du Pérou vers la France : 00 + 33 + numéro du correspondant (sans le 0 initial).  <br>
                        Pour appeler de la France vers le Pérou : 00 + 51 + indicatif de la ville (sans le 0) + numéro du correspondant.   <br>
                        Pour effectuer des appels intérieurs : indicatif de la région + numéro si l’on appelle dans une autre région. Sinon, ne pas composer l’indicatif.</p>
                        <br><br>
                        <p>COURRIER<br></p>

                        <p>Vous trouverez des boites postales dans chaque aéroport, et dans la grande majorité des hôtels. Nous recommandons cependant de préférer les postes centrales.   Il faut compter au moins 10 jours pour le destinataire reçoive une lettre depuis Lima.<br><br></p>
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
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Informations générales Bolivia</h3>
            </div>
            <div class="modal-content">
              <div id="carousel-example-generic-bolvia" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/bolivia1.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        <p>Informations générales <br></p>
                        <p align="center"> Bolivia tiene :</p> <br>
                        <p>• Une population d’environ 30 millions d’habitants. <br>
                        • Un PNB de $301.5 milliards de dollars en 2011. <br>
                        • Une surface totale de 1 285 220 km², soit trois fois la superficie de la France. <br>
                        • 2414 Km de côte. <br>
                        • Un pays ayant frontière commune avec le Chili, l’Argentine, le Brésil, l’Équateur et la Bolivie. <br>
                        • Un pays ayant comme point culminant le mont Huascarán, à 6768 mètres d’altitude.     <br>
                        <br>
                        Une destination à part :   <br>
                        • Le Pérou possède 28 des 31 climats présents sur la planète (dans certaines régions du pays, le temps est ensoleillé toute l’année) • 84 des 104 écosystèmes du monde sont présents au Pérou. <br></p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia2.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                      <p>Santé et sécurité<br></p>

                        <p>Généralités : Au Pérou, il est important de respecter quelques règles d’hygiène et de santé. Nous vous conseillons donc de :<br>
 
                        • Ne pas boire l’eau du robinet, sauf si elle est bouillie ou purifiée à l’aide de pastilles. <br>
                        • Vous laver régulièrement les mains pour limiter les risques de contaminations. <br>
                        • Éviter la viande et le poisson achetés sur les marchés : préférez les restaurants pour goûter aux spécialités telles que le ceviche.  <br><br>

                        Vaccins : Pour entrer au Pérou depuis la France, aucun vaccin n’est obligatoire. Certains sont cependant recommandés notamment les suivants :<br>
                        • Diphtérie-tétanos-poliomyélite<br>
                        • Fièvre jaune (en cas de séjour en Amazonie, et qui est obligatoire en cas de séjour  au Vénézuela depuis el Pérou) <br>
                        • Grippe (recommandée pour les sujets les plus fragiles, de nombreux cas de grippe AH1N1 ayant été détectés au Pérou)<br>
 
                        Séjour en Amazonie : En plus d’une vaccination contre la fièvre jaune, un traitement contre le paludisme peut être recommandé (consulter l’avis de votre médecin)  <br></p>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/bolivia3.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                      <p> Que dois-je apporter? <br></p>
                        <p>Voici une liste exhaustive de ce qu’il faut apporter lors d’un voyage au Pérou <br>
                         
                        Général : - Une valise ou un sac souple - Un sac à dos de 20 à 30 litres - Des chaussures confortables - Un chapeau ou casquette - Des lunettes de soleil - Une veste imperméable de type Gore Tex - Des vêtements chauds pour les soirées, car avec l’altitude, la température chute vite - Une trousse à pharmacie - Un foulard ou cache cou - Shorts ou pantacourts</p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia1.jpg" width="100%;" alt="...">
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
                      <img class="img-responsive" src="img/bolivia2.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Informations pratiques<br>
                        DÉCALAGE HORAIRE De mars à octobre (heure d’été), il faudra reculer votre montre de 7 heures en arrivant au Pérou, et de 6 heures seulement de novembre à février.   <br>
                        ÉLECTRICITÉ Voltage : 110/220V  <br>
                        Fréquence : 50/60 Hertz Les prises électriques au Pérou sont de deux types :  TÉLÉPHONE ET TÉLÉCOMMUNICATIONS Il est très facile de communiquer avec ses amis ou sa famille depuis le Pérou, les cabines téléphoniques étant nombreuses, et la couverture internet très bonne. <br>
                        Pour appeler du Pérou vers la France : 00 + 33 + numéro du correspondant (sans le 0 initial).  <br>
                        Pour appeler de la France vers le Pérou : 00 + 51 + indicatif de la ville (sans le 0) + numéro du correspondant.   <br>
                        Pour effectuer des appels intérieurs : indicatif de la région + numéro si l’on appelle dans une autre région. Sinon, ne pas composer l’indicatif.
                        <br><br>
                        COURRIER<br>

                        Vous trouverez des boites postales dans chaque aéroport, et dans la grande majorité des hôtels. Nous recommandons cependant de préférer les postes centrales.   Il faut compter au moins 10 jours pour le destinataire reçoive une lettre depuis Lima.<br><br>
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic-bolvia" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic-bolvia" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-arrow-right"></span>
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
            <h2>Qui sommes-nous ?</h2>
            <p>Tierras de los Andes est une S.A.C (Société Anonyme Fermée) qui a ouvert ses portes en 2000. Tour opérateur péruvien spécialisé dans les voyages d’aventures, nous avons comme principal objectif la création de séjours complets hors des sentiers battus. </p>
            <p>Tierras de los Andes est une agence qui organise des séjours et offre une large sélection de prestations et de services destinés à une clientèle individuelle ou de groupes. Nous concevons tout type de séjour, du voyage « découverte » au trek d’aventure, en passant par les séjours d'affaires. Nous recevons aussi bien des familles que des entreprises du monde entier afin de leur faire découvrir le Pérou et plus généralement l’Amérique du Sud.</p>
          </div>

        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Notre état d'esprit</h2>
            <p>Tierras de los Andes offre un large panel de services, depuis la planification des opérations jusqu’à la coordination des voyages sur mesure en passant par un service clientèle de qualité. Ce tour operateur péruvien repose sur une équipe de professionnels donnant le meilleur d’eux-mêmes pour assurer les meilleurs services possibles aux voyageurs et garantir ainsi, une satisfaction totale.</p>
            <p>Un esprit Aventure : le Pérou est un paradis pour le Tourisme d’Aventure. Qu’il s’agisse de gravir les montagnes, de marcher sur d’anciens sentiers incas, de parcourir les réseaux de chemins qui sillonnent le pays, de pratiquer du rafting en eaux vives. Tierras de los Andes vous propose tout type de voyages d’Aventure selon le niveau recherché : De l’extrême adrénaline aux aventures plus simples, pour amateurs ou passionnés.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>L'équipe Tierras de los Andes <a href="{{url('')}}/tours/decouverte/le-perou-en-famille"></a></h2>
          <br>
          <p align="center">Expérience et enthousiasme pour créer et vous proposer les voyages les plus originaux au Pérou. Nous opérons du cœur des Andes, Cusco où est situé notre siège social.</p>
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
<h2 style="color: #FFF">Blog</h2>
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
          <h2>Témoignages</h2>
          <br>
          <p align="center">Partager expériences de voyage avec nous</p>
          <br><br>
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
                      <span class="cetagory"> <strong></strong></span><!--TOUR???-->
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
                      <span class="cetagory"></span><!--TOUR???-->
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
                      <span class="cetagory"></span><!--TOUR???-->
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
      <br><br><br>

        <div class="heading text-center col-sm-8 col-sm-offset-2" style="margin-top:-35px">
          <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>

    </div>
    
    
        <div class="heading text-center col-sm-8 col-sm-offset-2">
<button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#favoritesModal">
  Entrez votre témoignage
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
        id="favoritesModalLabel">Entrez votre témoignage</h4>
      </div>
             <div class="modal-body"> 

     <div style="padding:0 5 5 5">
          <h3>Entrez un témoignage</h3>
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
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Entrez votre témoignage" style="border: 2px solid #e6e6e6;" required="required"></textarea>
                </div>
                <div class="form-group">
                  <button type="" class="btn-submit">Envoyer maintenant</button>
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
                <p> Adresse: Calle Turquezas E-11 Urb. Kenedy A - Cusco - Perú</p>
                <p> Téléphone: 00 51 84 247277</p>
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
                <p> Adresse: Calle Bolivar 221 Oficina 4 1er piso Miraflores - Lima - Perú</p>
                <p> Téléphone: 00 51 1 2434475</p>
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
        id="favoritesModalLabel">Nous Contacter</h4>
      </div>
             <div class="modal-body"> 

     <div style="padding:0 5 5 5">
          <h3>Nous Contacter</h3>
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

@include('website.fr.footerFR')

  <!--fin  del footer-->








@endsection



