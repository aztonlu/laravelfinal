@extends('website.partials.maindescubrirnuevofr')
@section('title', 'Découverte')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'Cette catégorie de voyages est dédiée aux voyageurs qui souhaitent découvrir le pays et ses richesses, sans difficulté particulière si ce n\'est de choisir le séjour qui vous est le plus adapté. Nous ne vous présentons que des idées de voyages : si vous souhaitez y apporter des modifications ou créer votre propre voyage, consultez-nous par le biais de notre page "Sur mesure".')

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

    <!--<section class="page-img" style="background-image: url('{{url('')}}/img/home_img/ausangate.jpg');">
    	<div class="container">
    		<div class="col-sm-8">
    			<h1 class="main-head">Decouverte</h1>
    			<h5 class="sub-head"><strong>Liste de voyage</strong></h5>
    		</div>
    		<div class="col-sm-4">
    			<ul class="breadcrumb">
    				<li><a href="/fr"><span class="icon-home"></span></a></li>
    				<li><a href="#">Decouverte</a></li>
    			</ul>
    		</div>

    	</div>
    </section>-->

    <main>
    	<div class="container">

            <div class="col-sm-4">
                <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                		<div class="panel-heading" role="tab" id="heading1One">
                			<h4 class="panel-title">
                				<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1One" aria-expanded="true" aria-controls="collapse1One">
                					Filtre
                				</a>
                			</h4>
                		</div>
                		<div id="collapse1One" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1One">

                            <div class="panel-body">

                				<form class="sidebar sort" action="{{ url('') }}/filterTours" method="get">
                                    <div class="form-group">
                                        <label><strong><div class="sort-title">{{ $count }} Résultat correspondant </div></strong></label>
                                        <p>Cette catégorie de voyages est dédiée aux voyageurs qui souhaitent découvrir le pays et ses richesses, sans difficulté particulière si ce n'est de choisir le séjour qui vous est le plus adapté. Nous ne vous présentons que des idées de voyages : si vous souhaitez y apporter des modifications ou créer votre propre voyage, consultez-nous par le biais de notre page "Sur mesure".</p>
                                    </div>


                					<div class="form-group">
                						<label><strong>Les catégories</strong></label>
                						<select class="form-control selectpicker" name="category">
                                            <option value="Discover">Découverte</option>
                                            <option value="Adventure">Adventure</option>
                                            <option value="Excursions">Excursions</option>
                                            <option value="High Mountain">Haute montagne</option>
                                            <option value="none">None</option>
                						</select>
                					</div>
                                    <input type="hidden" name="language" value="{{ $language }}">
                                    <div class="form-group">
                						<label><strong>Difficulté</strong></label>
                						<select class="form-control selectpicker" name="difficult">
                                            <option value="Easy">Facile</option>
                                            <option value="Medium">Moyen</option>
                                            <option value="Difficult">Dificile</option>
                                            <option value="Very Difficult">Très difficile</option>
                                            <option value="none">None</option>
                						</select>
                					</div>





<!--<div class="form-group">
                                        <label><strong>Difficulté</strong></label>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default active"  data-toggle="tooltip" data-placement="bottom" title="Easy">
                                                <input type="radio" name="options" id="option1" checked>
                                                <span class="icon-easy"></span>
                                            </label>
                                            <label class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Easy">
                                                <input type="radio" name="options" id="option2">
                                                <span class="icon-medium"></span>
                                            </label>
                                            <label class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Difficult">
                                                <input type="radio" name="options" id="option3">
                                                <span class="icon-difficult"></span>
                                            </label>
                                            <label class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Hard">
                                                <input type="radio" name="options" id="option4">
                                                <span class="icon-hard"></span>
                                            </label>
                                            <label class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Extreme">
                                                <input type="radio" name="options" id="option5">
                                                <span class="icon-extreme"></span>
                                            </label>
                                        </div>
                                    </div>-->

                                    <div class="form-group">
                                        <label><strong>Price <em>(in USD)</em></strong></label>
                                        <div class="price-widget">
                                            <div id="price-slider"></div>
                                            <div id="amount-min" class="pull-left"></div>
                                            <div id="amount-max" class="pull-right"></div>
                                            <input type="hidden" name="minA" id="minA">
                                            <input type="hidden" name="maxA" id="maxA">
                                        </div>
                                    </div>

                                    <button class="btn btn-search btn-primary hvr-sweep-to-right col-sm-12" type="submit">Recherche</button>

                                </form>
                					

                					<div class="form-group">
                						<label><strong>Price <em>(in USD)</em></strong></label>
                						<div class="price-widget">
                							<div id="price-slider"></div>
                							<div id="amount-min" class="pull-left"></div>
                							<div id="amount-max" class="pull-right"></div>
                                            <input type="hidden" name="minA" id="minA">
                                            <input type="hidden" name="maxA" id="maxA">
                						</div>
                					</div>

                                    <button class="btn btn-search btn-primary hvr-sweep-to-right col-sm-12" type="submit">Recherche</button>

                				</form>

                			</div>

                		</div>
            	    </div>
                </div>
            </div>

            <!-- CONTENEDOR DE LISTA -->
            <!-- aqui estoy cambiando -->
    		<div class="col-sm-8">

    			<!--<div class="sort-wrap">
    				<!--<div class="sort-title">{{ $count }} Résultat correspondant </div>
    				<div class="toogle-view">
    					<a class="icon icon-list active"></a>
    				</div>-->
                    <!--<p>Cette catégorie de voyages est dédiée aux voyageurs qui souhaitent découvrir le pays et ses richesses, sans difficulté particulière si ce n'est de choisir le séjour qui vous est le plus adapté. Nous ne vous présentons que des idées de voyages : si vous souhaitez y apporter des modifications ou créer votre propre voyage, consultez-nous par le biais de notre page "Sur mesure".</p>-->
    			<!--</div>


                <!-- LISTA -->
            @foreach($tours as $tour)
    			<div class="item-list">
                    
                        <div class="col-sm-5">
        					<div class="item-img row" style="background-image: url('{{url('')}}/{{  $tour->coverpage}}');">
        						<div class="item-overlay">
                                    <form action="tourshow" method="GET" id="myform" name="form">
                                        <input type="hidden" name="idTour" value="{{ $tour->id}}">
                                            <a href="{{url('')}}/tourshow/{{ $tour->id }}"><span class="icon-hiking"></a>                      
                                    </span></a>
                                    </form>
        						</div>
        					</div>
        				</div>
        				<div class="col-sm-7">
        					<div class="item-desc">
        						<h5 class="item-title"><a href="{{url('')}}/tourshow/{{ $tour->id }}">{{ $tour->title}}</h5></a>
        						<div class="sub-title">
        							Pérou
        						</div>
        						<div class="item-excerpt">{{ $tour->summary}}</div>

        						<div class="left"><span class="icon-calendar"></span> {{ $tour->days}} journées / {{ $tour->days -1}} Nuits</div>
        						<div class="right">
        							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
        							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
        						</div>
        					</div>
        					<div class="item-book">
                                
                                    
                                    <a href="{{url('')}}/tourshow/{{ $tour->id }}" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
                                
        						
        						<div class="price">USD {{ $tour->price}}</div>
        					</div>
        				</div>
                    
    		    </div>
            @endforeach
                

            </div>
            <!-- FIN CONTENEDOR DE LISTA -->
        </div>
    </main>

@endsection
