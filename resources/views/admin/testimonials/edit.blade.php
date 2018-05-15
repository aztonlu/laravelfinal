@extends('admin.partials.main')
@section('title', 'Editar testimonio')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Testimonio
                <small>Editar</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li><a href="#">Testimonios</a></li>
                <li class="active">Editar</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-lg-8 col-xs-12">
                    <!-- small box -->
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Editar "{{$testimonial->name}}"</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['route' => ['testimonials.update', $testimonial],'method' => 'PUT', 'class'=>'form-horizontal']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('name', 'Nombres', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('name', $testimonial->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'Email', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::email('email', $testimonial->email, ['class' => 'form-control', 'placeholder' => 'ejemplo@terandes.com', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('date', 'Fecha', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::date('date', $testimonial->date, ['class' => 'form-control',  'required']) !!}
                                </div>
                            </div>
                            
                              <div class="form-group">
                                {!! Form::label('nationality', 'Nacionalidad', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('nationality', $testimonial->nationality, ['class' => 'form-control', 'placeholder' => 'Nacionalidad', 'required']) !!}
                                </div>
                            </div>
                            
                            <div class="form-group">
                                {!! Form::label('testimonial', 'Testimonio', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::textarea('testimonial', $testimonial->testimonial, ['class' => 'form-control', 'placeholder' => 'Testimonio', 'rows' => '10', 'cols' => '40' , 'required']) !!}
                                </div>
                            </div>
                            
                            <div class="form-group">
                                {!! Form::label('status', 'Estado', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                     {!! Form::select('status', ['approved' => 'Aprobado', 'disapproved' => 'Desaprobado'], $testimonial->status, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            
                            <div class="form-group">
                                 {!! Form::label('tour', 'Tour', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    <select name="tour" class="form-control">
                                        @foreach($tours as $tourData)
                                        @if($tourData->id==$tour->id)
                                        <option value="{{ $tour->id }}" selected="selected" > {{ $tour->title }} </option> 
                                        @else
                                        <option value="{{ $tourData->id }}"> {{ $tourData->title }} </option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            
                            
                                <div class="form-group">
                                {!! Form::label('imagen', 'Imagenes del servidor', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    <button 
                                    type="button" 
                                    class="btn btn-info" 
                                    data-toggle="modal" 
                                    data-target="#favoritesModal">
                                    Selecciona una imagen desde el servidor
                                    <span class="fa fa-plus-circle"></span>
                                    </button>
                                    <br>
                                    <br>
                                    <div id="divImg">
                                    <img id='imgView' style='width:100px;height:100px' src='../../../{{$testimonial->photo}}'><br><input id='photo' name='photo' value='{{$testimonial->photo}}'><br><br>
                                    <a id='a' onclick="fromComputer()" href='#' style='color:#ff7677;'>O deseas cargar desde tu computadora</a>
                                    <input type='hidden' name='flag' value='true'>
                                    </div>
                                    
                                </div>
                                
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
                            id="favoritesModalLabel">Seleccionar una imagen</h4>
                            </div>
                            <div class="modal-body"> 
                            <h3>Selecciona una imagen</h3>
                            <p>Selecciona una imagen del servidor</p>
                            <br>
                            <div class="row">
                            {{leer_archivos_y_directorios('tours')}}
                            {{leer_archivos_y_directorios('testimonial')}}
                            {{leer_archivos_y_directorios('users')}}
                            {{leer_archivos_y_directorios('articles')}}
  
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

                if ($archivo!="." && $archivo!=".."  && $archivo!=".php" && $archivo!=".js" && $archivo!=".json" && $archivo!=".xml" && $archivo!=".DS_Store" && $archivo!="._.DS_Store"
                   && $archivo != "._persona.png")
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
                                             src='../../../" . $ruta . "/" . $archivo . "' class='img-responsive' style='width:200px;height:200px'>
                                            
                                        </div>
                                        <div  class='panel-footer'
                                             >
                                             <p style='font-size:10px'>" . $archivo ."</p>";
                        ?>
                                            
                                        &nbsp;&nbsp;&nbsp; <a href="#" onclick="functionSelect('<?php echo $ruta . '/' . $archivo?>')" data-dismiss="modal" style="color:#ff7677;"><span class="fa fa-check-square"></span> Seleccionar</a>
                                <script>
                                    function functionSelect(file){
                                        var img = document.getElementById('divImg');
                                        img.innerHTML = "<img id='imgView' style='width:100px;height:100px' src='../../../" +
                                            file + "'><br><input id='photo' name='photo' value='" + file +"'><br><br><a id='a' onclick='fromComputer()' href='#' style='color:#ff7677;'>O deseas cargar desde tu computadora</a><input type='hidden' name='flag' value='true'>";
                                    }
                                    function fromComputer(){
                                        var img = document.getElementById('divImg');
                                        img.innerHTML = "<h3>Cargar desde tu computadora</h3><br><div class='form-group'><div class='col-sm-10'><input id='photo' type='file'  class='form-control' name='photo' value='{{ old('imagen') }}' accept='image/png,image/gif,image/jpeg' onchange='readURL(this);'></div></div><input type='hidden' name='flag' value='false'>";
                                    }
                                </script>
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

                            </div>
                            </div>
                            </div>                        
                            
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('testimonials.index')}}" class="btn btn-default pull-left">Cancelar</a>
                            {!! Form::submit('Editar', ['class' => 'btn btn-info pull-right']) !!}
                        </div>
                        <!-- /.box-footer -->
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection