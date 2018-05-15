@extends('website.partials.mainfiltrer')
@section('title', 'Qui sommes-nous ?')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los andes: Tierras de los Andes est une S.A.C (Société Anonyme Fermée) qui a ouvert ses portes en 2000. Ce tour opérateur péruvien est spécialisé dans les voyages d?aventures avec comme objectif premier la création de séjours complets hors des sentiers battus. ')

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

    <div class="container">
    	<div class="section-page row">

            <div class="main-title-page">
              <h2>Qui sommes-nous ?</h2>
            </div>

    		<div class="col-sm-12">
    			<h3 id="informations-generales">Tierras de los Andes</h3>
                <p>est une S.A.C (Société Anonyme Fermée) qui a ouvert ses portes en 2000. Tour opérateur péruvien spécialisé dans les voyages d’aventures, nous avons comme principal objectif la création de séjours complets hors des sentiers battus.</p>
                <p>Nous concentrons nos efforts sur une offre touristique fiable de grande qualité impliquant des acteurs locaux. Nous développons donc une démarche équitable, responsable, et accordons une grande importance à l’écologie et au respect de l’environnement dans la conception de nos séjours.</p>

                <p><strong>Tierras de los Andes</strong> est une agence qui organise des séjours et offre une large sélection de prestations et de services destinés à une clientèle individuelle ou de groupes. Nous concevons tout type de séjour, du voyage « découverte » au trek d’aventure, en passant par les séjours d'affaires. Nous recevons aussi bien des familles que des entreprises du monde entier afin de leur faire découvrir le Pérou et plus généralement l’Amérique du Sud.</p>

                <p>Notre équipe est constituée de professionnels du tourisme, de guides et de gens de terrain travaillant à temps complet avec des opérateurs locaux répartis sur tout le territoire péruvien et bolivien. Notre agence a développé un solide partenariat avec les prestataires du tourisme local qui lui offrent ainsi les meilleures prestations en termes de transports, de guides et d’accompagnateurs locaux. Nous attachons une grande importance à chaque détail des voyages proposés pour qu’ils satisfassent pleinement la demande de chaque client et soit ainsi une totale réussite.</p>

    		</div>
    	</div>
    </div>

@endsection
