@extends('admin.partials.advanceforms')
@section('title', 'Agregar Tour')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tour
                <small>New</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{url('')}}/admin/tours">Tour</a></li>
                <li class="active">new</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                {{-- Validamos el formulario si cumple con el request de usuario --}}
                @include('admin.partials.errors')
                 

                 {!! Form::open(['route' => 'tours.store','method' => 'POST', 'class'=>'form-horizontal', 'files' => true]) !!}
                <!--<form action="{{ url('') }}/savetour" method="POST" class="form-horizontal"  enctype="multipart/form-data">-->
                    {{ csrf_field() }}
                    <div class="col-lg-12 col-xs-12">
                        <!-- small box -->
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Agregar file</h3>
                            </div>
                            <div class="box-body">


                                <hr>
                                <div class="form-group">
                                    {!! Form::label('title', 'Title', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Write a tittle', 'required']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('summary', 'Summary', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::textarea('summary', null, ['class' => 'form-control', 'rows'=>'3', 'placeholder' => 'Describes the tour ']) !!}
                                    </div>
                                </div>
                                @if(Auth::user()->type == "admin")
                                <div class="form-group">
                                    {!! Form::label('language', 'Language', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        <select name="language" class="form-control">
                                          <option value="Spanish">Spanish</option>
                                          <option value="English">English</option>
                                          <option value="Italian">Italian</option>
                                          <option value="French">French</option>
                                          <option value="German">German</option>
                                        </select>
                                    </div>
                                </div>
                                @else
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="hidden" name="language" value="{{Auth::user()->language }}" class="col-sm-2 form-control" >

                                        <input type="hidden" name="" value="{{Auth::user()->language }}" class="col-sm-2 form-control" disabled>
                                    </div>
                                </div>
                                @endif
                                <div class="form-group">
                                     {!! Form::label('categoriesLabel', 'Categoria', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        <select name="categories" class="form-control" id="categories">
                                            @foreach($categories as $category) 
                                            <option value="{{ $category->name }}" selected="selected" > {{ $category->name }} </option> 
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('difficulty', 'Difficult', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                    {!! Form::select('difficulty', ['Easy' => 'Easy', 'Medium' => 'Medium', 'Difficult' => 'Difficult', 'Very Difficult' => 'Very Difficult'], null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                        {!! Form::label('etapeJournal', 'Choose Measures', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            <div class="col-sm-2">
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="measures[]" value="Family">Family</label>
                                                    <label><input type="checkbox" name="measures[]" value="Couple">Couple</label>
                                                    <label><input type="checkbox" name="measures[]" value="Group">Group</label>
                                                    <label><input type="checkbox" name="measures[]" value="Friends">Friends</label>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                                <hr>
                                
                            </div>
                        </div>
                    </div>

                        <!--<div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">SEO - Etiquetas básicas de posicionamiento</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    {!! Form::label('titleseo', 'Titulo SEO', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('titleseo', null, ['class' => 'form-control', 'placeholder' => 'Título SEO', 'required']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('descriptionseo', 'Descripción SEO', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::textarea('descriptionseo', null, ['class' => 'form-control', 'rows'=>'5', 'placeholder' => 'Descripción correctamnte escrito de maximo de 155 caracteres...']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('keywordseo', 'Palabras clave', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('keywordseo', null, ['class' => 'form-control', 'placeholder' => 'max 6, palabras, minusculas, separadas, por comas', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>-->
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
                                        {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'TLA000', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    {!! Form::label('price', 'Precio:', ['class'=>'col-sm-4 control-label']) !!}
                                    <div class="col-sm-8">
                                        {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => '0.00', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    {!! Form::label('days', 'Días:', ['class'=>'col-sm-4 control-label']) !!}
                                    <div class="col-sm-8">
                                        {!! Form::number('days', null, ['class' => 'form-control', 'placeholder' => 'Días', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    {!! Form::label('people', 'Personas:', ['class'=>'col-sm-4 control-label']) !!}
                                    <div class="col-sm-8">
                                        {!! Form::number('peoples', null, ['class' => 'form-control', 'placeholder' => 'Minimo de personas', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    {!! Form::label('offer', 'Descuento %:', ['class'=>'col-sm-4 control-label']) !!}
                                    <div class="col-sm-8">
                                        {!! Form::number('offer', null, ['class' => 'form-control', 'placeholder' => '0', 'min' => '0', 'max'=>'100', 'required']) !!}
                                    </div>
                                </div>
                                <!--<div class="form-group" style="margin-bottom:5px;">
                                    <label class="col-sm-4 control-label"><span class="fa fa-search"></span> SEO:</label>
                                    <div class="col-sm-8"  style="padding-top:.4em;">
                                        <kbd>Bueno</kbd>
                                    </div>
                                </div>-->
                                <div class="form-group" style="margin-bottom:5px;">
                                    <label class="col-sm-4 control-label"><span class="fa fa-user"></span> Autor:</label>
                                    <div class="col-sm-8"  style="padding-top:.4em;">
                                        <input type="text" class="form-control" name="author" value="{{ Auth::user()->email}}">
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <label class="col-sm-4 control-label"><span class="fa fa-calendar"></span> Editado:</label>
                                    <div class="col-sm-8"  style="padding-top:.4em;">
                                        <kbd>12/10/2017</kbd>
                                    </div>
                                </div>-->
                            </div>
                            
                            <div class="form-group">
                                {!! Form::label('coverpage', 'Imagen', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    <input id="coverpage" type="file"  class="form-control" name="coverpage" value="{{ old('imagen') }}" accept="image/png,image/gif,image/jpeg" required>
                                </div>
                            </div>
                            
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{route('tours.index')}}" class="btn btn-default pull-left">Cancelar</a>
                                {!! Form::submit('Guardar tour', ['class' => 'btn btn-info pull-right']) !!}
                            </div>
                            <!-- /.box-footer -->
                        </div>
                    </div>
                       <!-- <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Imagen de portada</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="content-uploader col-sm-12">
                                        <label class="uploader" ondragover="return false">
                                            <i class="icon-upload icon"></i>
                                            <img src="" class="">
                                            <input type="file" accept="image/*" name="coverpage">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>-->

                <!--</form>-->
                {!!Form::close()!!}

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection