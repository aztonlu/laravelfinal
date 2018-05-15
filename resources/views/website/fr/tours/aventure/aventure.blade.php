@extends('website.partials.mainfiltrer')
@section('title', 'Aventure')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'voyage aventure perou, voyage aventure au perou, terre d aventure perou, aventure inca perou, agence voyage aventure perou')

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
    			<h1 class="main-head">Aventure</h1>
    			<h5 class="sub-head"><strong>Liste de voyage</strong></h5>
    		</div>
    		<div class="col-sm-4">
    			<ul class="breadcrumb">
    				<li><a href=""><span class="icon-home"></span></a></li>
    				<li><a href="">Aventure</a></li>
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
                    <p>Cette catégorie de voyage est dédiée aux voyageurs qui aiment vivre le pays et ses richesses à travers des activités physiques comme le trekking, la randonnée ou encore le VTT. Nous ne vous présentons que des idées de voyages : si vous souhaitez y apporter des modifications ou créer votre propre voyage, consultez-nous par le biais de l'onglet "Sur mesure".</p>
    			</div>


                <!-- LISTA -->
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/du-choquequirao-au-machu-picchu.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/aventure/du-choquequirao-au-machu-picchu"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Du Choquequirao au Machu Picchu</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Aventurez-vous au cœur de l'histoire Inca, en atteignant le mystérieux site du Choquequirao. Séjour idéal pour les amoureux des grands espaces et des itinéraires hors des sentiers battus.</div>

    						<div class="left"><span class="icon-calendar"></span> 18 journées / 17 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/aventure/du-choquequirao-au-machu-picchu" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 2280.00</div>
    					</div>
    				</div>
    		    </div>
                <!-- -->

                <!-- LISTA -->
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/du-canyon-de-colca-lausangate.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/aventure/du-canyon-de-colca-lausangate"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Du canyon de Colca à l'Ausangate</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Voyage dédié à la découverte des paysages andins lors de deux trekkings, le tout combiné avec la visite des incontournables du Pérou.	</div>

    						<div class="left"><span class="icon-calendar"></span> 17 journées / 16 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/aventure/du-canyon-de-colca-lausangate" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 2185.00</div>
    					</div>
    				</div>
    		    </div>
                <!-- -->

                <!-- LISTA -->
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/du-machu-picchu-la-cordillere-blanche.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/aventure/du-machu-picchu-la-cordillere-blanche"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Du Machu Picchu à la Cordillère Blanche</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Ce voyage est fait pour les amoureux des grands espaces ainsi que pour les amateurs de hautes montagnes. Vous commencez par vous acclimater lors d'un trek dans la vallée du Lares jusqu'à atteindre le Machu Picchu. Ce séjour se termine par un trek en cordillère blanche pour randonnée au coeur des montagnes.</div>

    						<div class="left"><span class="icon-calendar"></span> 14 journées / 13 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/aventure/du-machu-picchu-la-cordillere-blanche" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 2075.00</div>
    					</div>
    				</div>
    		    </div>
                <!-- -->

                <!-- LISTA -->
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/cordillere-de-huayhuash.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/aventure/cordillere-de-huayhuash"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Cordillère de Huayhuash</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Profitez des paysages exceptionnels que vous offre la cordillère Huayhuash lors d'un trek hors des sentiers battus.</div>

    						<div class="left"><span class="icon-calendar"></span> 14 journées / 13 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/aventure/cordillere-de-huayhuash" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 1235.00</div>
    					</div>
    				</div>
    		    </div>
                <!-- -->

                <!-- LISTA -->
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/sensations-extremes-au-perou.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/aventure/sensations-extremes-au-perou"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Sensations extrêmes au Pérou</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Ce voyage vous permet de découvrir les incontournables du Pérou, tout en alliant des activités sportives et ludiques. Sensations fortes garanties.</div>

    						<div class="left"><span class="icon-calendar"></span> 15 journées / 14 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/aventure/sensations-extremes-au-perou" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 1985.00</div>
    					</div>
    				</div>
    		    </div>
                <!-- -->

                <!-- LISTA -->
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/alpamayo-et-ausangate-au-plus-pres-des-sommets.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/aventure/alpamayo-et-ausangate-au-plus-pres-des-sommets"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Alpamayo et Ausangate, au plus près des sommets</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Découvrez les deux plus belles cordillères du Pérou, à l'occasion d'un trek exceptionnel.</div>

    						<div class="left"><span class="icon-calendar"></span> 23 journées / 22 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/aventure/alpamayo-et-ausangate-au-plus-pres-des-sommets" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 2610.00</div>
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
