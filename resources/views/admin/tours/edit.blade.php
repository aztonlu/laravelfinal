@extends('admin.partials.advanceforms')
@section('title', 'Agregar Tour')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tour
                <small>Edit</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{url('')}}/admin/tours">Tour</a></li>
                <li class="active">Edit</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                {{-- Validamos el formulario si cumple con el request de usuario --}}
                @include('admin.partials.errors')

                <!-- form start -->
                    
                    <form action="{{url('')}}/update" method="POST" enctype="multipart/form-data" class="form-horizontal" class=" form-horizontal">
                        {{ csrf_field() }}
                        <div class="col-lg-12 col-xs-12">
                            <!-- small box -->
                            <!-- Horizontal Form -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Agregar file</h3>
                                </div>
                                <div class="box-body">

                                    @foreach($tours as $tour)
                                    <hr>
                                    <div class="form-group">
                                        <input type="hidden" name="idTour" id="idTour" value="{{ $tour->id }}">
                                        {!! Form::label('title', 'Title', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::text('title', $tour->title , ['class' => 'form-control', 'placeholder' => 'Aquí el título...', 'required']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('summary', 'Summary', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::textarea('summary', $tour->summary, ['class' => 'form-control', 'rows'=>'3', 'placeholder' => 'Describe lo más destacado de esta provincia']) !!}
                                        </div>
                                    </div>
                                    @if(Auth::user()->type == "admin")
                                    <div class="form-group">
                                        {!! Form::label('language', 'Language', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                        {!! Form::select('language',['spanish' => 'Spanish', 'english' => 'English', 'italian' => 'Italian', 'french' => 'French', 'german' => 'German'], $tour->language, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    @else
                                    <div class="form-group">
                                        {!! Form::label('language', 'Language', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            <input type="hidden" name="language" value="{{Auth::user()->language }}" class="col-sm-2 form-control" >

                                            <input type="text" name="" value="{{Auth::user()->language }}" class="col-sm-2 form-control" disabled>
                                        </div>
                                    </div>
                                    @endif
                                    <hr>
                                    @endforeach
                                    <div class="form-group">
                                         {!! Form::label('categories', 'Categoria', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            <select name="categories" class="form-control">
                                                @foreach($categories as $category) 
                                                    @for ($i = 0; $i < count($tours); $i++)
                                                        @if($category->name == $tours[$i]->category)
                                                       <option value="{{ $category->name }}" selected="selected"> {{ $category->name }} </option>
                                                       @else
                                                       <option value="{{ $category->name }}" > {{ $category->name }} </option> 
                                                       @endif 
                                                    @endfor
                                                    
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('difficulty', 'Difficult', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                        {!! Form::select('difficulty', ['Easy' => 'Easy', 'Medium' => 'Medium', 'Difficult' => 'Difficult', 'Very Difficult' => 'Very Difficult'], $tour->difficulty, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    
                                        {!! Form::label('etapeJournal', 'Choose Measures', ['class'=>'col-sm-2 control-label']) !!}
                                        @foreach($category_tours as $tag)
                                        <div class="col-sm-2">
                                            <label><input type="checkbox" value="{{ $tag }}" name="{{ $tag}}" id="{{ $tag }}" checked onclick="validateMeasures(this.value);">{{ $tag }}</label>
                                        </div>
                                        
                                    @endforeach
                                    @foreach($tags as $tagControl)
                                        <div class="col-sm-2">
                                            <label><input type="checkbox" value="{{ $tagControl }}" name="{{ $tagControl }}" id="{{ $tagControl }}"  onclick="validateMeasures(this.value);">{{ $tagControl }}</label>
                                        </div>
                                        
                                    @endforeach
                                    </div>
                                    
                                            
                                        <span id="messageEtape" style="color: green"></span>
                                        <script>
                                            function validateMeasures(measure)
                                            {
                                              var estado = "";
                                              var idTour = document.getElementById('idTour').value;
                                              if(document.getElementById(measure).checked){
                                                 
                                                  estado = "inputCheck";
                                              }
                                              else{
                                                
                                                 estado = "outputCheck";
                                              }

                                              $.ajaxSetup({
                                                 headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                                              });
                                              $.ajax({
                                                      url: "{{url('')}}/editMeasure",
                                                      type: "POST",
                                                      dataType: 'text',
                                                      data: {'measure': measure, 'estado': estado, 'idTour': idTour},
                                                      
                                                      success: function(data){  
                                                          var spanEtape = document.getElementById('messageEtape');
                                                          if(estado == "inputCheck")
                                                          {
                                                            document.getElementById("messageEtape").innerHTML="inserted correctly";
                                                            
                                                          }
                                                          else
                                                          {
                                                            document.getElementById("messageEtape").innerHTML="successfully deleted";
                                                            
                                                          }
                                                      },
                                                      error: function(data){
                                                        document.getElementById("messageEtape").innerHTML="Error: please refresh the page";
                                                        
                                                      }
                                                  });
                                            }
                                        </script>
                                    <hr>
                                    <div class="form-group">
                                        {!! Form::label('summary', 'Tour', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            <div class="nav-tabs-custom">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tab_1" data-toggle="tab">Itinerario</a></li>
                                                    <li><a href="#tab_2" data-toggle="tab">Organización</a></li>
                                                    <li ><a href="#tab_3" data-toggle="tab">Images</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1">
                                                        @foreach($galleries as $gallery)
                                                            <div class="form-group">
                                                                <div class="col-sm-10">
                                                                    <h4>{{ $gallery->name }}</h4>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4">
                                                                           <img src="{{url('')}}/{{ $gallery->routeImage}}" width="200" height="200"> 
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                          <h5>{{ $gallery->description }}</h5> 
                                                                          
                                                                          <ul class="list-inline"><li><h5><b>Accomodation:</b></h5></li><li><h5>{{ $gallery->stay }}</h5></li></ul>
                                                                          <ul class="list-inline"><li><h5><b>Transport:</b></h5></li><li><h5>{{ $gallery->transport }}</h5></li></ul>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <a href="/editGallery/{{ $gallery->id }}" style="color:#2f99ff;"><span class="ion-edit"></span></a> &nbsp;&nbsp;&nbsp; <a href="{{url('')}}/destroyGallery/{{ $gallery->id }}/{{ $gallery->tour_id }}" onclick="return confirm('¿Estas seguro de querer eliminar el jornal?')" style="color:#ff7677;"><span class="ion-close-circled"></span></a>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        {{ $galleries->links() }}
                                                    </div>
                                                    <!-- /.tab-pane -->
                                                    <div class="tab-pane" id="tab_2">
                                                        @foreach($organizations as $organization)
                                                            <div class="col-sm-10">
                                                                <h4>{{ $organization->name }}</h4>
                                                                <h5>{{ $organization->description }}</h5>
                                                            </div>
                                                            <div class="col-sm-2" style="padding-top: 3%;">
                                                                    <a href="/editOrganization/{{ $organization->id }}" style="color:#2f99ff;"><span class="ion-edit"></span></a> &nbsp;&nbsp;&nbsp; <a href="{{url('')}}/destroyOrganization/{{ $organization->id }}/{{ $organization->tour_id }}" onclick="return confirm('¿Estas seguro de querer eliminar esta organización?')" style="color:#ff7677;"><span class="ion-close-circled"></span></a>
                                                                </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="tab-pane" id="tab_3">
                                                        <a href="{{url('')}}/saveImagesTour/{{ $tour->id }}" style="color:#2f99ff; padding-bottom: 5%;"><span class="ion-plus"></span>Add Images</a> 
                                                        @foreach($images as $image)
                                                            <div class="col-sm-10" style="padding-bottom: 3%;padding-top: 3%;">
                                                                
                                                                <img src="{{url('')}}/{{ $image->routeImage }}" height="200" width="200">
                                                            </div>
                                                            <div class="col-sm-2" style="padding-top: 3%;">
                                                                    <a href="" style="color:#2f99ff;"><span class="ion-edit"></span></a> &nbsp;&nbsp;&nbsp; <a href="{{url('')}}/destroyImageTour/{{ $image->id }}/{{ $image->tour_id }}" onclick="return confirm('¿Estas seguro de querer eliminar esta imagen?')" style="color:#ff7677;"><span class="ion-close-circled"></span></a>
                                                                </div>
                                                        @endforeach
                                                    </div>
                                                    
                                                </div>
                                                <!-- /.tab-content -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            
                        <!-- /.row -->
                        <div class="col-lg-12 col-xs-12">
                        <!-- small box -->
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border">

                                <div class="col-sm-5">
                                    {!! Form::select('state', ['draft' => 'Borrador', 'publish' => 'Publicado'], null, ['class' => 'form-control', 'placeholder' => 'Estado de tour']) !!}
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group" style="margin-bottom:5px;">
                                    {!! Form::label('code', 'Código TLA:', ['class'=>'col-sm-4 control-label']) !!}
                                    <div class="col-sm-8">
                                        {!! Form::text('code', $tours[0]->code, ['class' => 'form-control', 'placeholder' => 'TLA000', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    {!! Form::label('price', 'Precio:', ['class'=>'col-sm-4 control-label']) !!}
                                    <div class="col-sm-8">
                                        {!! Form::text('price', $tours[0]->price, ['class' => 'form-control', 'placeholder' => '0.00', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    {!! Form::label('days', 'Días:', ['class'=>'col-sm-4 control-label']) !!}
                                    <div class="col-sm-8">
                                        {!! Form::number('days', $tours[0]->days, ['class' => 'form-control', 'placeholder' => 'Días', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    {!! Form::label('people', 'Personas:', ['class'=>'col-sm-4 control-label']) !!}
                                    <div class="col-sm-8">
                                        {!! Form::number('peoples', $tours[0]->peoples, ['class' => 'form-control', 'placeholder' => 'Minimo de personas', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    {!! Form::label('offer', 'Descuento %:', ['class'=>'col-sm-4 control-label']) !!}
                                    <div class="col-sm-8">
                                        {!! Form::number('offer', $tours[0]->offer, ['class' => 'form-control', 'placeholder' => '0', 'min' => '0', 'max'=>'100', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    <label class="col-sm-4 control-label"><span class="fa fa-user"></span> Autor:</label>
                                    <div class="col-sm-8"  style="padding-top:.4em;">
                                        <input type="text" class="form-control" name="author" value="{{ $tours[0]->author }}" disabled>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                {!! Form::label('coverpage', 'Imagen', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    <input id="coverpage" type="file"  class="form-control" name="coverpage" value="{{ old('imagen') }}" accept="image/png,image/gif,image/jpeg" onchange="readURL(this);">
                                </div>
                            </div>
                            
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{route('tours.index')}}" class="btn btn-default pull-left">Cancelar</a>
                                {!! Form::submit('Guardar tour', ['class' => 'btn btn-info pull-right']) !!}
                            </div>
                            <!-- /.box-footer -->
                        </div>
                    </form>


            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection