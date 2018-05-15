@extends('website.partials.mainvistas')
@section('title', 'Découverte')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'Cette catégorie de voyages est dédiée aux voyageurs qui souhaitent découvrir le pays et ses richesses, sans difficulté particulière si ce n\'est de choisir le séjour qui vous est le plus adapté. Nous ne vous présentons que des idées de voyages : si vous souhaitez y apporter des modifications ou créer votre propre voyage, consultez-nous par le biais de notre page "Sur mesure".')

@section('translate')

    

@endsection

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
                                         <p align="center">Découverte</p>
                                        @elseif($tour->category == "Aventure")
                                        <p align="center">Aventure</p>
                                        @elseif($tour->category == "High-Mountain")
                                        <p align="center">Haute montagne</p>
                                        @elseif($tour->category == "Excursions")
                                        <p align="center">Excursion</p>
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
                                        <label><strong>Categories</strong></label>
                                        <select class="form-control selectpicker" name="category">
                                            <option value="Discover">Découverte</option>
                                            <option value="Adventure">Adventure</option>
                                            <option value="Excursions">Excursions</option>
                                            <option value="High Mountain">Haute montagne</option>
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

    		<div class="col-sm-8">

    		

                <!-- LISTA -->
            @foreach($tours as $tour)
    			<div class="item-list">
                    
                        <div class="col-sm-5">
        					<div class="item-img row" style="background-image: url('{{url('')}}/{{  $tour->coverpage}}');">
        						<div class="item-overlay">
                                    
                                            <a href="{{url('')}}/fr/tourshow/{{ $tour->id }}"><span class="icon-hiking"></a>  
                                                                 
                                    </span></a>
                                    
        						</div>
        					</div>
        				</div>
        				<div class="col-sm-7">
        					<div class="item-desc">
        						<h4 class="item-title"><a href="{{url('')}}/fr/tourshow/{{ $tour->id }}">{{ $tour->title}}</h4></a>
        						<div class="sub-title">
        							Pérou
        						</div>
        						<div class="item-excerpt">{{ $tour->summary}}</div>

        						<div class="left"><span class="icon-calendar"></span> {{ $tour->days}} journées / {{ $tour->days -1}} Nights</div>
        						<div class="right">
        							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
        							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
        						</div>
        					</div>
        					<div class="item-book">
                                
                                    
                                    <a href="{{url('')}}/fr/tourshow/{{ $tour->id }}" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
                                
        						
        						<div class="price">USD {{ $tour->price}}</div>
        						
        					</div>
        				</div>
                    
    		    </div>
            @endforeach

            </div>
           
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
            
    <div class="footer-top wow fadeInUp animated" style="padding-top: 0px;" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;background-color: rgb(16,54,9)">

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
              <a href="{{url('')}}/fr/tours/decouverte/Aventure"><img src="{{url('')}}/images/Aventura.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <h4>Haute Montagne</h4>
                <a href="{{url('')}}/fr/tours/decouverte/High-Mountain"><img src="{{url('')}}/images/Alta_montaña.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <h4>Decouverte</h4>
              <a href="{{url('')}}/fr/tours/decouverte/Discover"><img src="{{url('')}}/images/Descubir.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                   <h4>Excursions</h4>
                <a href="{{url('')}}/fr/tours/decouverte/Excursions"><img src="{{url('')}}/images/Excursiones.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
        </div>
    </div>
     <div class="col-xs-12 col-md-4">
            <h2><strong>Subscribe</strong></h2>
        
            <h5 style="color: #fff;">Abonnez-vous pour rester à jour sur les nouvelles et les notifications</h5>
          
              <form action="{{route('publicnewsletters.store')}}" method="post">
            {{ csrf_field() }}
              <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input name='email' placeholder='example@mail.com' class="form-control text-center" type="email" style="width:90%">
              <button type="submit" class="btn-submit text-center" style="width:90%">Inscrivez-vous maintenant</button>
                  
          </form>
           
    </div>
  </div>
</div>
    </div>
    
  </footer>
  
  
@endsection
