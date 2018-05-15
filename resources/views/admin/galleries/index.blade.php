@extends('admin.partials.datatables')
@section('title', 'Testimonials')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Galeria 
                <small>Listado</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Galeria</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    @include('flash::message')
                </div>
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <button 
                            type="button" 
                            class="btn btn-info" 
                            data-toggle="modal" 
                            data-target="#favoritesModal">
                            Ingresa una nueva imagen
                            <span class="fa fa-plus-circle"></span>
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
        id="favoritesModalLabel">Guardar una imagen</h4>
      </div>
             <div class="modal-body"> 
          <h3>Ingresa una nueva imagen</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        
                 <br>
          <form id="form-image" name="image-form" method="post" route="{{ route('galleries.store') }}" enctype="multipart/form-data">
                    
                           <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                               
                                   <div class="col-sm-12">
                        <div class="form-group">
                        {!! Form::label('imagen', 'Selecciona el tipo', ['class'=>'col-sm-2 control-label']) !!}
                               <div class="col-sm-10">
                    <select name="type">
                    <option value="tours"> Para Tours</option>
                    <option value="testimonial">Para Testimonios</option>
                    <option value="users">Para Usuarios</option>
                    </select>
                            </div>
                              
              </div>
              </div>        
                     <div class="col-sm-12">
                        <div class="form-group">
                                {!! Form::label('Iimagen', 'Imagen', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    <input id="imagen" type="file"  class="form-control" name="imagen" value="{{ old('imagen') }}" accept="image/png,image/gif,image/jpeg" onchange="readURL(this);">
                                </div>
                            </div>
                    </div>
              </div>
              
                <div style="margin-top:30px" class="form-group">
                  <button type="submit" class="btn btn-info">Ingresar la Imagen</button>
                </div>
              </form>
                 </div>

 </div>
    </div>
</div>
                        <!-- /.box-header -->
{{leer_archivos_y_directorios('tours')}}
{{leer_archivos_y_directorios('testimonial')}}
{{leer_archivos_y_directorios('users')}}
                        <div class="box-body">
                            <div class="row">
  
<!--/*
     *funcion para leer archivos de un directorio (recursivo)
     *-->
                                
<?php    function leer_archivos_y_directorios($ruta)
{

    if (is_dir($ruta))
    {
        if ($aux = opendir($ruta))
        {
            while (($archivo = readdir($aux)) !== false)
            {

                if ($archivo!="." && $archivo!=".."  && $archivo!=".php" && $archivo!=".js" && $archivo!=".json" && $archivo!=".xml" && $archivo!=".DS_Store" && $archivo!="._.DS_Store")
                {
                    $ruta_completa = $ruta . '/' . $archivo;
                    if (is_dir($ruta_completa))
                    {
                        echo "<br /><strong>Directorio:</strong> " . $ruta_completa;
                        leer_archivos_y_directorios($ruta_completa . "/");
                    }
                    else
                    {
                        echo                               "<div class='col-md-4'>
                                    <div class='panel panel-default'>
                                        
                                        <div  class='panel-body'>
                                        <img
                                             src='../" . $ruta . "/" . $archivo . "' class='img-responsive' style='width:200px;height:200px'>
                                            
                                        </div>
                                        <div  class='panel-footer'
                                             >
                                             <p>" . $ruta . '/' . $archivo ."</p>";
                        ?>
                                            
                                        &nbsp;&nbsp;&nbsp; <a href="{{route('admin.galleries.destroy', [$ruta, $archivo])}}" onclick="return confirm('¿Estas seguro de querer eliminar la imagen del servidor?')" style="color:#ff7677;"><span class="fa fa-trash"></span> Eliminar imagen</a>
                        </div>
                                    </div>
                                </div>
                    <?php
                    }
                }
            }
 
            closedir($aux);

        }
    }
    else
    {
        echo $ruta;
        echo "<br />No es ruta valida";
    }
}?>

                                                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>


@endsection