@extends('website.partials.de.maindecouvertede')
@section('title', 'Découverte')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'Cette catégorie de voyages est dédiée aux voyageurs qui souhaitent découvrir le pays et ses richesses, sans difficulté particulière si ce n\'est de choisir le séjour qui vous est le plus adapté. Nous ne vous présentons que des idées de voyages : si vous souhaitez y apporter des modifications ou créer votre propre voyage, consultez-nous par le biais de notre page "Sur mesure".')



@section('content')

    

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
                                        
                                        @foreach($tours as $tour)
                                        @endforeach
                                        @if($tour->category == "Discover")
                                         <p align="center">Entdeckt</p>
                                        @elseif($tour->category == "Aventure")
                                        <p align="center">Abenteuer</p>
                                        @elseif($tour->category == "High-Mountain")
                                        <p align="center">Hoher Berg</p>
                                        @elseif($tour->category == "Excursions")
                                        <p align="center">Ausflug</p>
                                        @endif
                                        
                                        
                                        <div class="icono">
                                        @foreach($tours as $tour)
                                        @endforeach
                                        
                                         @if($tour->category == "Discover")
                                        <img src="{{url('')}}/img/des1.jpg" height="30%" width="50%" class="img-circle" >
                                        
                                        
                                        @elseif($tour->category == "Aventure")
                                        <img src="{{url('')}}/img/aven1.jpg" height="30%" width="50%" class="img-circle">
                                        
                                        
                                        @elseif($tour->category == "Excursions")
                                        <img src="{{url('')}}/img/excur1.jpg" height="30%" width="50%" class="img-circle">
                                        
                                        
                                        @elseif($tour->category == "High-Mountain")
                                        <img src="{{url('')}}/img/Altamon1.jpg" height="30%" width="50%" class="img-circle">
                                        
                                        
                                        @endif
                                          </div>  
                                            <br><br>
                                        <label><strong>Kategorien</strong></label>
                                        <select class="form-control selectpicker" name="category">
                                            <option value="Discover">Entdeckt</option>
                                            <option value="Adventure">Abenteuer</option>
                                            <option value="Excursions">Ausflug</option>
                                            <option value="High Mountain">Hoher Berg</option>
                                            <option value="none">None</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="language" value="{{ $language }}">
                                    <div class="form-group">
                                        <label><strong>Difficulté</strong></label>
                                        <select class="form-control selectpicker" name="difficult">
                                            <option value="Easy">Einfach</option>
                                            <option value="Medium">Durchschnittlich</option>
                                            <option value="Difficult">Hart</option>
                                            <option value="Very Difficult">Sehr schwer</option>
                                            <option value="none">None</option>
                                        </select>
                                    </div>

                                    

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
    		<div class="col-sm-8">

    			


                <!-- LISTA -->
            @foreach($tours as $tour)
    			<div class="item-list">
                    
                        <div class="col-sm-5">
        					<div class="item-img row" style="background-image: url('{{url('')}}/{{  $tour->coverpage}}');">
        						<div class="item-overlay">
                                    
                                            <a href="{{url('')}}/de/tourshow/{{ $tour->id }}"><span class="icon-hiking"></a>  
                                                                 
                                    </span></a>
                                    
                                </div>
        					</div>
        				</div>
        				<div class="col-sm-7">
        					<div class="item-desc">
        						<a href="{{url('')}}/de/tourshow/{{ $tour->id }}" h5 class="item-title">{{ $tour->title}}</h5></a>
        						<div class="sub-title">
        							Peru
        						</div>
        						<div class="item-excerpt">{{ $tour->summary}}</div>

        						<div class="left"><span class="icon-calendar"></span> {{ $tour->days}} Tage / {{ $tour->days -1}} Nuits</div>
        						<div class="right">
        							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
        							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
        						</div>
        					</div>
        					<div class="item-book">
                                
                                    
                                    <a href="{{url('')}}/de/tourshow/{{ $tour->id }}" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
                                
        						
        						<div class="price">USD {{ $tour->price}}</div>
        					</div>
        				</div>
                    
    		    </div>
            @endforeach
                <!-- -->

                <!-- LISTA 
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/au-coeur-des-communautes-andines.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/decouverte/au-coeur-des-communautes-andines"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Au coeur des communautés andines</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Un parcours différent, hors des sentiers battus, à la rencontre des communautés andines. Vous commencez par séjourner au cœur du canyon de Colca, au sein de la communauté de Pumachiri. Puis vous poursuivez votre voyage vers le lac Titicaca et sa communauté de Llachon avant de terminer votre découverte par la région de Cusco et plus spécialement la communauté de Maras. Durant cette immersion, vous découvrez les activités quotidiennes et les traditions ancestrales des habitants de ces trois villages. Une découverte en profondeur de la culture péruvienne!</div>

    						<div class="left"><span class="icon-calendar"></span> 17 journées / 16 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/decouverte/au-coeur-des-communautes-andines" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 2650.00</div>
    					</div>
    				</div>
    		    </div>-->
                <!-- -->

                <!-- LISTA 
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/le-perou-en-famille.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/decouverte/le-perou-en-famille"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Le Pérou en famille</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Ce voyage est conçu pour permettre de découvrir le Pérou, dans un esprit ludique qui séduira petits et grands. Des activités culturelles avec les communautés locales vous sont également proposés. Vos enfants et vous passerez ainsi un voyage agréable et divertissant pendant lequel vous n’aurez jamais l’occasion de vous ennuyer ! Un séjour idéal pour vous et votre famille.</div>

    						<div class="left"><span class="icon-calendar"></span> 14 journées / 13 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/decouverte/le-perou-en-famille" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 1730.00</div>
    					</div>
    				</div>
    		    </div>-->
                <!-- -->

                <!-- LISTA 
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/le-perou-culturel-du-nord-au-sud.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/decouverte/le-perou-culturel-du-nord-au-sud"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Le Pérou culturel, du Nord au Sud</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Le Pérou est un pays chargé d’histoire : vous aurez l’occasion de le découvrir au cours de ce voyage qui vous mènera d’abord dans la région Nord, jadis dominée par de nombreuses civilisations pré-incas ayant laissé derrière elles une multitude de vestiges archéologiques. Vous plongerez ensuite au cœur de la civilisation inca en vous rendant à Cusco, ancienne capitale de l’empire précolombien, puis dans la Vallée sacrée où vous découvrirez, entre autre, l’un des joyaux du Pérou : la célèbre et majestueuse citadelle du Machu Picchu.</div>

    						<div class="left"><span class="icon-calendar"></span> 14 journées / 13 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/decouverte/le-perou-culturel-du-nord-au-sud" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 2020.00</div>
    					</div>
    				</div>
    		    </div>-->
                <!-- -->

                <!-- LISTA 
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/voyage-de-noces-au-perou.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/decouverte/voyage-de-noces-au-perou"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Voyage de noces au Pérou</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Quelle meilleure occasion que votre voyage de noces pour découvrir le Pérou, pays magique et mystique ! Nous avons concocté pour vous un programme qui associe les principaux sites et attraits de notre pays au charme de ses hébergements. Nuits romantiques sur l’île de Suasi avec vue imprenable sur le lac Titicaca, ou encore au pied du célèbre Machu Picchu… Tout a été pensé pour faire de votre voyage de noces un séjour inoubliable !</div>

    						<div class="left"><span class="icon-calendar"></span> 14 journées / 13 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/decouverte/voyage-de-noces-au-perou" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 3085.00</div>
    					</div>
    				</div>
    		    </div>-->
                <!-- -->

                <!-- LISTA 
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/perou-bolivie-express.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/decouverte/perou-bolivie-express"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Pérou-Bolivie Express</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Ce voyage est un concentré des sites archéologiques majeurs et des paysages les plus époustouflants du Pérou et de la Bolivie, en un temps record : en 13 jours, vous découvrirez la région de Cusco et son Machu Picchu, la capitale bolivienne et sa folle ambiance, et le Salar d’Uyuni aux couleurs inoubliables, tout en rencontrant la population locale. Un séjour intense fait pour de courtes vacances !</div>

    						<div class="left"><span class="icon-calendar"></span> 12 journées / 11 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/decouverte/perou-bolivie-express" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 2035.00</div>
    					</div>
    				</div>
    		    </div>-->
                <!-- -->

                <!-- LISTA 
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/voyage-special-fetes-religieuses-et-pont-inca.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/decouverte/voyage-special-fetes-religieuses-et-pont-inca"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Voyage spécial : Fêtes religieuses et pont inca</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Ce séjour vous permet d'assister aux deux fêtes les plus importantes du Pérou. Venez découvrir sa population et ses traditions ancestrales.</div>

    						<div class="left"><span class="icon-calendar"></span> 20 journées / 19 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/decouverte/voyage-special-fetes-religieuses-et-pont-inca" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 2555.00</div>
    					</div>
    				</div>
    		    </div>-->
                <!-- -->


                <!-- PAGINACION -->
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



<style>
.icono{
    padding: 0px 0px 0px 90px;
}
  h4{
    color: #fff;
    
  }
  p{
    font-size:38px; color:#4b4b4b;
    margin-left: 15px 15px;
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
                   <h4>Abenteuer</h4>
              <a href="{{url('')}}/de/tours/decouverte/Aventure"><img src="{{url('')}}/images/Aventura.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <h4>Hoher Berg</h4>
                <a href="{{url('')}}/de/tours/decouverte/High-Mountain"><img src="{{url('')}}/images/Alta_montaña.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <h4>Entdeckung</h4>
              <a href="{{url('')}}/de/tours/decouverte/High-Mountain"><img src="{{url('')}}/images/Descubir.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                   <h4>Ausflüge</h4>
                <a href="{{url('')}}/de/tours/decouverte/High-Mountain"><img src="{{url('')}}/images/Excursiones.jpg" height="60%" width="60%" class="img-circle"></a>
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
              <button type="submit" class="btn-submit text-center" style="width:90%">Jetzt Abonnieren</button>
                  
          </form>
           
    </div>
  </div>
</div>
    </div>
    
  </footer>


@endsection
