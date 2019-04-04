@extends('website.partials.es.main')
@section('title', 'Ruta')

@section('content')


<section id="portfolio" style="padding-top:0px; padding-bottom: 0px">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <!--<h3>Precios e informacion</h3>-->
          <p> </p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="img/fondo1.png" alt="">
            </div>

          </div>
        </div>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

        </div>
        <div class="col-sm-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <h3>Precios de Lunes a Domingos</h3>
              </p>Cusco - Poroy &nbsp &nbsp &nbsp S/.1.50</p>
              </p>Cusco - Desvio &nbsp &nbsp &nbsp S/.1.50</p>
              </p>Cusco - Cachimayo &nbsp &nbsp &nbsp S/.2.00</p>
              </p>Cusco - Pucyura &nbsp &nbsp &nbsp S/.2.00</p>
              </p>Cusco - Izcuchaca &nbsp &nbsp &nbsp S/.2.00</p>

              </p>Izcuchaca - Pucyura &nbsp &nbsp &nbsp S/.1.00</p>
              </p>Izcuchaca - Cachimayo &nbsp &nbsp &nbsp S/.1.00</p>
              </p>Izcuchaca - Desvio &nbsp &nbsp &nbsp S/.1.50</p>
              </p>Izcuchaca - Poroy &nbsp &nbsp &nbsp S/.1.50</p>
              </p>Izcuchaca - Cusco &nbsp &nbsp &nbsp S/.2.00</p>

            </div>
          </div>
        </div>

        </div>
      </div>
    </div>

      <div class="heading text-center col-sm-12"style="padding-top: 35px">
          <button
              type="button"
              class="btn btn-primary btn-lg"
              data-toggle="modal"
              data-target="#registrarusuarios">
              Registrese
          </button>
        </div>
        <br> <br> <br>

        <!--<div class="heading text-center col-sm-16"style="padding-top: 35px">
            <button
                type="button"
                class="btn btn-primary btn-lg"
                data-toggle="modal"
                data-target="#reservarpasajes">
                Reservar
            </button>
          </div>-->


        <div class="modal fade" id="registrarusuarios"
              tabindex="-1" role="dialog"
            aria-labelledby="favoritesModalRegistrese">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close"
                    data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title"
                  id="favoritesModalRegistrese" style="color: red">Ingrese sus datos</h4>
                </div>
                    <div class="modal-body">
                        <form id="registrarusuarios" name="contact-form" method="post" action="{{ route('Usuarioregistrado.store') }}" enctype="multipart/form-data">
                          <?php $url = Request::path();?>
                          <!--<input type="hidden" name="language" value="Spanish">
                          <input type="hidden" name="lenguage" value="Spanish">
                          <input type="hidden" name="type" value="member">
                          <input type="hidden" name="routeImage" value="users/persona.png">-->
                          <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input type="text" name="nombreusuario" class="form-control" placeholder="Nombre" required="required" style="border: 2px solid #e6e6e6;">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input type="number" name="dniusuario" class="form-control" placeholder="Dni" required="required" style="border: 2px solid #e6e6e6;">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input type="email" name="emailusuario" class="form-control" placeholder="Email" required="required" style="border: 2px solid #e6e6e6;">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input type="password" name="password" class="form-control" placeholder="Contraseña" required="required" style="border: 2px solid #e6e6e6;">
                                </div>
                              </div>

                                <div class="col-sm-6">
                                </div>
                          </div>
                            <div class="form-group">
                               {{ csrf_field() }}
                              <button type="submit" class="btn-submit">Enviar ahora</button>
                            </div>
                            </form>
                        </div>
                 </div>


              </div>
          </div>
</div>

<div class="modal fade" id="reservarpasajes"
      tabindex="-1" role="dialog"
    aria-labelledby="favoritesModalReservar">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close"
            data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title"
          id="favoritesModalRegistrese" style="color: red">Ingrese los datos</h4>
        </div>
            <div class="modal-body">
                <form id="registrarusuarios" name="contact-form" method="post" action="{{ route('Pasajereservado.store') }}" enctype="multipart/form-data">
                  <?php $url = Request::path();?>

                  <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" name="dni" class="form-control" placeholder="Dni" required="required" style="border: 2px solid #e6e6e6;">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" name="horabus" class="form-control" placeholder="Hora de Bus" required="required" style="border: 2px solid #e6e6e6;">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" name="paraderopago" class="form-control" placeholder="Paradero a Pagar" required="required" style="border: 2px solid #e6e6e6;">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="hidden" name="estado" value="Pendiente">
                          <!--<input type="hidden"  name="estado" class="form-control" placeholder="Estado" required="required" style="border: 2px solid #e6e6e6;">-->
                        </div>
                      </div>

                        <div class="col-sm-6">
                        </div>
                  </div>
                    <div class="form-group">
                       {{ csrf_field() }}
                      <button type="submit" class="btn-submit">Enviar ahora</button>
                    </div>
                    </form>
                </div>
         </div>


      </div>
  </div>

    <div id="portfolio-single-wrap"style="padding-top: 45px">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section>




    <section id="twitter" class="parallax"style="padding-top: 5px">

      <div id="blogspace">
        <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev" style="margin-top: -160px;"><i class="fa fa-angle-left"></i></a>
        <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next" style="margin-top: -160px;"><i class="fa fa-angle-right"></i></a>
        <div class="container">
          <div class="row">
            <div id="blogsec" class="col-sm-14 col-sm-offset-2">
              <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
                <br><br>
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



  <!--Testimonial-->
  <section id="testimonial" style="padding-top: 0px; padding-bottom: 0px">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Testimonios</h2>
          <p align="center">Comparta sus experieNncias con nosotros</p>
        </div>
      </div>
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
                      <span class="cetagory"></span><!--TOUR???-->
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
                      <span class="cetagory">in </span><!--TOUR???-->
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

        <div class="heading text-center col-sm-8 col-sm-offset-2" style="margin-top:-35px">
          <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>

    </div>
        <div class="heading text-center col-sm-8 col-sm-offset-2">
            <br><br>
          <button
              type="button"
              class="btn btn-primary btn-lg"
              data-toggle="modal"
              data-target="#favoritesModal">
              Ingrese su testimonio
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
        id="favoritesModalLabel" style="color: red">Ingrese su testimonio</h4>
      </div>
             <div class="modal-body">

          <form id="main2-contact-form" name="contact-form" method="post" action="{{ route('publictestimonials.store') }}" enctype="multipart/form-data">
             <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input type="hidden" name="status" value="disapproved">
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Nombre" required="required" style="border: 2px solid #e6e6e6;">
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
                      <input type="text" name="nationality" class="form-control" placeholder="Nacionalidad" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="hidden" name="tour" class="form-control" placeholder="--" required="required" value="165">
                        <!--<select type="hidden" name="tour" class="form-control">
                          <!--@foreach($tours as $tour) -->
                          <!--<option value="165" selected="selected" > {{ $tour->title }} </option>
                          <!--@endforeach-->
                      </div>
                        <!--</select>-->
                  </div>
              </div>

                     <div class="col-sm-6" type="hidden">
                        <div class="form-group">
                                {!! Form::label('Iimagen', 'Imagen', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    <input id="imagen" type="file"  class="form-control" name="imagen" value="{{ old('imagen') }}" accept="image/png,image/gif,image/jpeg" onchange="readURL(this);">
                                </div>
                            </div>
                    </div>
                  </div>
                <div class="form-group">
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="3" placeholder="Ingrese su Testimonio" style="border: 2px solid #e6e6e6;" required="required"></textarea>
                </div>
                <div class="form-group">
                  <button type="" class="btn-submit">Enviar ahora</button>
                </div>
              </form>
                 </div>


 </div>
    </div>
</div>


  </section><!--/#testimonial-->

  <section id="contact2" style="padding-top: 8%;">
    <br>

      <center>
        <h2>Contactenos</h2>
      </center>
      <br>



      </div>
      <div class="heading text-center col-sm-8 col-sm-offset-2">
<button
   type="button"
   class="btn btn-primary btn-lg"
   data-toggle="modal"
   data-target="#contactModal">
  Contactenos
</button>
</div>

</section>

  <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" style="bottom:150px;">
    <a class="a2a_button_facebook"></a><br>
    <a class="a2a_button_twitter"></a><br>
    <a class="a2a_button_google_plus"></a><br>
    <a class="a2a_button_pinterest"></a><br>
</div>

@section('mapas')



<section id="map-section" >

      <center>
        <h3>Rutas</h3>
      </center>

      <div class="col-sm-12">


          <div class="col-sm-6">

            <div class="panel panel-default">
              <div class="panel-body">
                <center>
                   <div id="google-map" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
                </center>
              </div>
              <div class="panel-footer" style="color: #000;">
                <p> Ruta ida</p>
              </div>
            </div>


          </div>

          <div class="col-sm-6">

            <div class="panel panel-default">
              <div class="panel-body">

                  <div id="google-map1" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"></div>

              </div>
              <div class="panel-footer" style="color: #000;">
                <p> Ruta vuelta</p>
              </div>
            </div>


          </div>


      </div>



</section>
@endsection

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
        id="favoritesModalLabel" style="color: red"> Contactenos</h4>
      </div>
             <div class="modal-body">

     <div style="padding:0 5 5 5">
          <form id="main2-contact-form" name="contact-form" method="post" action="{{ route('publictestimonials.store') }}" enctype="multipart/form-data">
             <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input type="hidden" name="status" value="disapproved">
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
<<<<<<< HEAD
                      <input type="text" name="name" class="form-control" placeholder="Apellidos y Nombres" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="number" name="name" class="form-control" placeholder="N&uacute;mero de contacto" required="required" style="border: 2px solid #e6e6e6;">
=======
                      <input type="text" name="name" class="form-control" placeholder="Nombre" required="required" style="border: 2px solid #e6e6e6;">
>>>>>>> 7728e1a9e789ec34ed38e773e56ed7ab3464e616
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" name="nationality" class="form-control" placeholder="Nacionalidad" required="required" style="border: 2px solid #e6e6e6;">
                      </div>
                  </div>
              </div>
      </div>
                <div class="form-group">
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Contacto" style="border: 2px solid #e6e6e6;" required="required"></textarea>
                </div>
                <div class="form-group">
                  <button type="" class="btn-submit">Enviar</button>
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
  background-color: #99CCFF;
}
</style>



<!--inicio del footer-->

 <footer >

    <div class="footer-top wow fadeInUp animated" style="padding-top: 0px;" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;background-color: rgb(13,52,14)">



<div class="container-fluid">
  <div class="row" style="text-align: center; color: Gray;">

     <div class="col-xs-12 col-md-8">
      <div class="row" sty>


     <div class="col-xs-12 col-md-4">
            <h2><strong>Suscribete</strong></h2>

            <h5 style="color: #fff;">Suscríbase para tener noticias y notificaciones nuevas</h5>

              <form action="{{route('publicnewsletters.store')}}" method="post">
            {{ csrf_field() }}
              <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input name='email' placeholder='example@mail.com' class="form-control text-center" type="email" style="width:90%">
              <button type="submit" class="btn-submit text-center " style="width:90%">Suscribirme ahora</button>

          </form>

    </div>
  </div>
</div>
    </div>

  </footer>


  <!--fin  del footer-->

@endsection
