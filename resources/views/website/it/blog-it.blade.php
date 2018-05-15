@extends('website.partials.it.maintrip')
@section('title', 'Voyage combiné Pérou/Bolivie, Machu Picchu, Salar Uyuni, Titicaca, Laguna Colora')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'Découvrez les incontournables du Pérou et de la Bolivie dans ce combiné parfaitement équilibré. Nature et découvertes culturelles ne manqueront pas à lappel.')

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

<div class="trip-detail">
    <div class="container">

        <div class="col-md-9 tab-wrap">
            <h2>Blog</h2>

            <div id="shop-detail">


            </div>


            <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#itenary"></a></li>
            </ul>

            <div class="tab-content paper-effect">
                <div class="tab-pane active" id="itenary">

                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/perou-bolivie-express/dia-2-cusco.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">Rendez-vous en terre inconnue : Arthur chez les quechuas des And</h4>
                            <p>Tierras de los Andes est fière d'avoir participé à la réalisation de l'émission Rendez-vous en terre inconnue au Pérou, qui a permis à Arthur de rencontrer les indiens Quechuas au Pérou. <br />
                            Nous remercions toute l’équipe de réalisation et à Arthur pour avoir mis la lumière sur une population peu connue et qui a su garder ses traditions. </p>


                        </div>
                    </div>
                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/perou-bolivie-express/dia-2-cusco.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">Discover ATN : The adventure travel network</h4>
                            <p>The network's main objective is to help you prepare your trip and choose the agency that best fits your needs, safety and respect for nature & local populations. If you have used the services of one of the member agencies of Adventure Travel Network and that you have been satisfied, you will have the guarantee of an equivalent benefit by contacting another agency network in the preparation of a new journey. </p>


                        </div>
                    </div>
                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/perou-bolivie-express/dia-2-cusco.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">Extreme sensations in Peru : new online travel!</h4>
                            <p>Want to live otherwise in Peru, enjoying extreme sensations? This trip is for you: in 16 days, we offer an extraordinary experience in our country through sports like paragliding, buggy, kayaking, hiking, horseback riding, mountain biking and ziplining in various natural environments (desert, mountains, jungle, etc.), and whilst, you will visit the most beautiful and the most important archaeological sites in Peru. Stay of extreme madness!. </p>


                        </div>
                    </div>
                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/perou-bolivie-express/dia-2-cusco.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">Vous souhaitez voyager en direct ? Découvrez le réseau Voyages</h4>
                            <p> Voyages Réceptifs est un réseau d’agences locales réparties dans le monde entier. <br />
                            Si vous avez déjà utilisé les services de l’une des agences membre de Voyages Réceptifs et que vous en avez été satisfaits, vous aurez alors la garantie d’une prestation équivalente en contactant une autre agence du réseau. </p>


                        </div>
                    </div>

                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/perou-bolivie-express/dia-2-cusco.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">Voyage spécial! Fêtes religieuses et dernier pont inca</h4>
                            <p>Vous avez envie de vivre en direct les grands moments de la ville de Cusco, avec le plus grand p&eacute;lerinage d&#39;Am&eacute;rique, la f&ecirc;te du Corpus Christi puis les c&eacute;l&eacute;brations autour de la r&eacute;fection du dernier pont inca de la r&eacute;gion? Ce voyage est une immersion au coeur des traditions, de l&#39;histoire et des couleurs cuzqu&eacute;niennes, aussi bien incas que coloniales. Une seule date de d&eacute;part, &agrave; ne pas manquer! </p>


                        </div>
                    </div>

                    


                </div>


            </div>
        </div>

    </div>
</div>

@endsection
