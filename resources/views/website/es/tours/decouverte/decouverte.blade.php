@extends('website.partials.es.maines')
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
                                         <p align="center">Descubrir</p>
                                        @elseif($tour->category == "Aventure")
                                        <p align="center">Aventura</p>
                                        @elseif($tour->category == "High-Mountain")
                                        <p align="center">Alta montaña</p>
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
                                        <label><strong>Categorias</strong></label>
                                        <select class="form-control selectpicker" name="category">
                                            <option value="Discover">Descubrir</option>
                                            <option value="Adventure">Aventura</option>
                                            <option value="Excursions">Excursions</option>
                                            <option value="High Mountain">Alta montaña</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="language" value="{{ $language }}">
                                    <div class="form-group">
                                        <label><strong>Dificultad:</strong></label>
                                        <select class="form-control selectpicker" name="difficult">
                                            <option value="Easy">Facil</option>
                                            <option value="Medium">Moderado</option>
                                            <option value="Difficult">Dificil</option>
                                            <option value="Very Difficult">Muy dificil</option>
                                        </select>
                                    </div>

                                    

                                    <div class="form-group">
                                        <label><strong>Precio <em>(in USD)</em></strong></label>
                                        <div class="price-widget">
                                            <div id="price-slider"></div>
                                            <div id="amount-min" class="pull-left"></div>
                                            <div id="amount-max" class="pull-right"></div>
                                            <input type="hidden" name="minA" id="minA">
                                            <input type="hidden" name="maxA" id="maxA">
                                        </div>
                                    </div>

                                    <button class="btn btn-search btn-primary hvr-sweep-to-right col-sm-12" type="submit">Buscar</button>

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

        						<div class="left"><span class="icon-calendar"></span> {{ $tour->days}} journées / {{ $tour->days -1}} Noches</div>
        						<div class="right">
        							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
        							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
        						</div>
        					</div>
        					<div class="item-book">
                                
                                    
                                    <a href="{{url('')}}/fr/tourshow/{{ $tour->id }}" class="btn btn-primary hvr-sweep-to-right">Reservar</a>
                                
        						
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
    color: #4b4b4b;
    
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
                   <h4>Aventura</h4>
              <a href="{{url('')}}/es/tours/decouverte/Aventure"><img src="{{url('')}}/images/Aventura.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <h4>Haute Montagne</h4>
                <a href="{{url('')}}/es/tours/decouverte/High-mountain"><img src="{{url('')}}/images/Alta_montaña.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <h4>Decouverte</h4>
              <a href="{{url('')}}/es/tours/decouverte/Discover"><img src="{{url('')}}/images/Descubir.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <a href="{{url('')}}/es/tours/decouverte/Excursions"><div class="col-xs-12 col-sm-6 col-md-3">
                   <h4>Excursions</h4>
                <img src="{{url('')}}/images/Excursiones.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
        </div>
    </div>
     <div class="col-xs-12 col-md-4">
            <h2><strong>Suscribete</strong></h2>
        
            <h5 style="color: #fff;">Suscríbase para tener noticias y notificaciones nuevas</h5>
          
              <form action="{{route('publicnewsletters.store')}}" method="post">
            {{ csrf_field() }}
              <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input name='email' placeholder='example@mail.com' class="form-control text-center" type="email" style="width:90%">
              <button type="submit" class="btn-submit text-center" style="width:90%">Suscribirme ahora</button>
                  
          </form>
           
    </div>
  </div>
</div>
    </div>
    
  </footer>
@endsection
