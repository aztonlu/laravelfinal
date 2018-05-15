@extends('website.partials.mainfiltrer')
@section('title', 'Excursions')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'Les excursions sont faites pour les voyageurs qui souhaitent inclure un trekking ou une extension en Amazonie, dans les Andes ou sur la côte à leur séjour. Nous vous proposons ainsi des randonnées, séjours et extensions courts, de 3 à 5 jours, pour tous les budgets et tous le goûts.')

@section('translate')

    <div class="top-header">
        <div class="wrap-top">
            <div class="info-top pull-left">
                <small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Appelez-nous maintenant: 00 51 84 247277</a></small>
            </div>
            <div class="language-top pull-right">
                <small class="top-element-language">Langue:</small>
                <a class="route-language" href="#"><img class="img-lng" src="{{url('')}}/img/lng/fr.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/en/tours/discovery/peru-bolivia-express"><img class="img-lng" src="{{url('')}}/img/lng/en.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/es/tours/descubrimiento/perou-bolivia-expreso"><img class="img-lng" src="{{url('')}}/img/lng/es.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/de/tours/Entdeckung/peru-bolivien-express"><img class="img-lng" src="{{url('')}}/img/lng/de.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/it/tours/scoperta/peru-bolivia-espresso"><img class="img-lng" src="{{url('')}}/img/lng/it.png" alt="Idioma"></a>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <section class="page-img" style="background-image: url('{{url('')}}/img/home_img/ausangate.jpg');">
    	<div class="container">
    		<div class="col-sm-8">
    			<h1 class="main-head">Excursions</h1>
    			<h5 class="sub-head"><strong>Liste de voyage</strong></h5>
    		</div>
    		<div class="col-sm-4">
    			<ul class="breadcrumb">
    				<li><a href=""><span class="icon-home"></span></a></li>
    				<li><a href="">Excursions</a></li>
    			</ul>
    		</div>

    	</div>
    </section>

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

                				<form class="sidebar sort">
                					<div class="form-group">
                						<label><strong>Les catégories</strong></label>
                						<select class="form-control selectpicker">
                                            <option value="decouverte">Découverte</option>
                                            <option value="aventure">Aventure</option>
                                            <option value="excursions">Excursions</option>
                                            <option value="montagne">Haute montagne</option>
                						</select>
                					</div>

                                    <div class="form-group">
                						<label><strong>Difficulté</strong></label>
                						<select class="form-control selectpicker">
                                            <option value="facile">Facile</option>
                                            <option value="moyen">Moyen</option>
                                            <option value="dificile">Dificile</option>
                                            <option value="tres-dificile">Très difficile</option>
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
                						</div>
                					</div>

                                    <button class="btn btn-search btn-primary hvr-sweep-to-right col-sm-12">Recherche</button>

                				</form>

                			</div>

                		</div>
            	    </div>
                </div>
            </div>

            <!-- CONTENEDOR DE LISTA -->
    		<div class="col-sm-8">

    			<div class="sort-wrap">
    				<div class="sort-title">06 Résultat correspondant</div>
    				<div class="toogle-view">
    					<a class="icon icon-list active"></a>
    					<a href="#" class="icon icon-grid"></a>
    				</div>
                    <p>Les excursions sont faites pour les voyageurs qui souhaitent inclure un trekking ou une extension en Amazonie, dans les Andes ou sur la côte à leur séjour. Nous vous proposons ainsi des randonnées, séjours et extensions courts, de 3 à 5 jours, pour tous les budgets et tous le goûts.</p>
    			</div>


                <!-- LISTA -->
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/le-trek-du-chemin-inca.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/excursions/le-trek-du-chemin-inca"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Le trek du chemin inca</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Ascension des deux monts les plus spectaculaires de l'Amérique Latine : l'Alpamayo et le Chopicalqui.</div>

    						<div class="left"><span class="icon-calendar"></span> 04 journées / 03 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/excursions/le-trek-du-chemin-inca" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 745.00</div>
    					</div>
    				</div>
    		    </div>
                <!-- -->

                <!-- LISTA -->
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/trek-du-salkantay.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/excursions/trek-du-salkantay"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Trek du Salkantay</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Cet itinéraire vous fera côtoyer la plus haute montagne de la cordillère Vilcabamba, le Salkantay (6271m), auquel vous ferez face avant de le contourner par la gauche. Ce trekking, qui offre la possibilité de randonner dans un paysage époustouflant, est une bonne alternative au Chemin de l’Inca pour se rendre de Cusco au Machu Picchu.</div>

    						<div class="left"><span class="icon-calendar"></span> 05 journées / 04 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/excursions/trek-du-salkantay" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 580.00</div>
    					</div>
    				</div>
    		    </div>
                <!-- -->

                <!-- LISTA -->
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/le-trek-dhuchuy-qosqo.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/excursions/le-trek-dhuchuy-qosqo"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Le trek d'Huchuy Qosqo</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Ce trek hors des sentiers battus vous permet d'emprunter un ancien tronçon du si célèbre Chemin Inca.</div>

    						<div class="left"><span class="icon-calendar"></span> 04 journées / 03 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/excursions/le-trek-dhuchuy-qosqo" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 385.00</div>
    					</div>
    				</div>
    		    </div>

                <!-- LISTA -->
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/tour-de-lausangate.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/excursions/tour-de-lausangate"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Tour de l'Ausangate</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Partez pour un tour de l'Ausangate : le plus haut sommet de la région de Cusco. Un itinéraire équilibré pour vous faire profiter des paysages exceptionnels de la région.</div>

    						<div class="left"><span class="icon-calendar"></span> 05 journées / 04 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/excursions/tour-de-lausangate" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 550.00</div>
    					</div>
    				</div>
    		    </div>
                <!-- -->

                <!-- LISTA -->
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/trek-de-la-vallee-de-lares.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/excursions/trek-de-la-vallee-de-lares"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Trek de la vallée de Lares</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Venez découvrir la vallée vierge de Lares, rencontrez sa population locale, et concluez ce merveilleux voyage par la mystérieuse citadelle du Machu Picchu.	</div>

    						<div class="left"><span class="icon-calendar"></span> 05 journées / 04 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/excursions/trek-de-la-vallee-de-lares" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 410.00</div>
    					</div>
    				</div>
    		    </div>
                <!-- -->

                <!-- LISTA -->
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/cusco-eternel.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/excursions/cusco-eternel"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Cusco éternel</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Ce séjour vous permet de visiter les principaux sites de Cusco et de la Vallée Sacrée, en terminant par la majestueuse citadelle du Machu Picchu.</div>

    						<div class="left"><span class="icon-calendar"></span> 04 journées / 03 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/excursions/cusco-eternel" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 880.00</div>
    					</div>
    				</div>
    		    </div>
                <!-- -->


                <!-- PAGINACION --->
                <!--<div class="pagination-wrap">
                	<span class="total">Total 127</span>
                	<nav class="pull-right">
                		<ul class="pagination">
                			<li class="page-item">
                				<a class="page-link" href="#" aria-label="First">Premier</a>
                			</li>
                			<li class="page-item"><a class="page-link" href="#">1</a></li>
                			<li class="page-item active"><a class="page-link" href="#">2</a></li>
                			<li class="page-item"><span class="page-link">..</span></li>
                			<li class="page-item"><a class="page-link" href="#">99</a></li>
                			<li class="page-item">
                				<a class="page-link" href="#" aria-label="Last">Dernier</a>
                			</li>
                		</ul>
                	</nav>
                	<div class="clearfix"></div>
                </div>-->
                <!-- -->

            </div>
            <!-- FIN CONTENEDOR DE LISTA -->
        </div>
    </main>

@endsection
