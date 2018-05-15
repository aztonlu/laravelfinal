

@extends('website.partials.en.maintrip')
@section('title', 'Voyage combiné Pérou/Bolivie, Machu Picchu, Salar Uyuni, Titicaca, Laguna Colora')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'Découvrez les incontournables du Pérou et de la Bolivie dans ce combiné parfaitement équilibré. Nature et découvertes culturelles ne manqueront pas à lappel.')

@section('translate')

    <div class="top-header">
        <div class="wrap-top">
            <div class="info-top pull-left">
                <small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Call us now: 00 51 84 247277</a></small>
            </div>
            <div class="language-top pull-right">
                <small class="top-element-language">language:</small>
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
            <h2>Contact</h2>

            <div id="shop-detail">


            </div>

            <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#itenary">Contact form</a></li>
            </ul>

            <div class="tab-content paper-effect">
                <div class="tab-pane active" id="itenary">

                    

                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/logo2.png" class="img-day" alt="">
                            <br>
                            <br>
                            <br>
                            <br>
                            <p>Calle Turquezas E-11 <br>
                            Urb. Kenedy A - CUSCO - PERU<br> 
                            Tel : 00 51 84 247277<br> 
                            Mail : terandes@terandes.com</p>
                        </div>
                        <div class="col-sm-8">
                        <div class="panel-body">
                            {!! Form::open(['route' => 'mail.store', 'method' => 'POST']) !!}
                            <div class="form-group">
                              {!! Form::text('name', null, ['placeholder' => 'Name' ]) !!}
                             </div>
                             <br>

                             <div class="form-group">
                              {!! Form::text('telefono', null, ['placeholder' => 'Phone' ]) !!}
                             </div>
                             <br>

                             <div class="form-group">
                              {!! Form::text('pais', null, ['placeholder' => 'Country' ]) !!}
                             </div>
                             <br>

                            <div class="form-group">
                            {!! Form::text('email', null, ['placeholder' => 'E-mail' ]) !!}
                            </div>
                            <br>
                            <div class="form-group">
                            {!! Form::textarea('mensaje', null, ['placeholder' => 'Message' ]) !!}
                            </div>
                            <br>
                            <div class="form-group">
                            {!! Form::submit('Send', ['class' => 'btn btn-success ' ] ) !!}
                            </div>
                            {!! Form::close() !!}
                            </div>
                        </div>
                            

                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>





@endsection
