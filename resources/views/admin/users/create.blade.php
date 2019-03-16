@extends('admin.partials.main')
@section('title', 'Registrar usuario')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Usuarios
                <small>Nuevo</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#">Usuarios</a></li>
                <li class="active">Nuevo</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                {{-- Validamos el formulario si cumple con el request de usuario --}}
                @include('admin.partials.errors')

                <div class="col-lg-8 col-xs-12">
                    <!-- small box -->
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Agregar usuario</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['route' => 'users.store','method' => 'POST', 'class'=>'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('name', 'Nombres', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'Email', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@hotmail.com', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group" hidden="true">
                                {!! Form::label('facebook', 'Facebook Link', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'https://www.facebook.com/userperson']) !!}
                                </div>
                            </div>

                            <div class="form-group" hidden="true">
                                {!! Form::label('twitter', 'Twitter Link', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => 'https://twitter.com/userperson']) !!}
                                </div>
                            </div>

                            <div class="form-group" hidden="true">
                                {!! Form::label('linkedin', 'LinkedIn Link', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('linkedin', null, ['class' => 'form-control', 'placeholder' => 'https://www.linkedin.com/in/userperson/']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('password', 'Password', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::password('password', ['class'=>'form-control', 'placeholder' => '• • • • • • •']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('type', 'Tipo de usuario', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <!--div class="form-group">
                                {!! Form::label('languageLabel', 'User Language', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::select('language', ['spanish' => 'Spanish', 'english' => 'English', 'italian' => 'Italian', 'frech' => 'French', 'german' => 'German'], null, ['class' => 'form-control']) !!}
                                </div>
                            </div>-->
                            <div class="form-group" hidden="true">
                                {!! Form::label('languageLabel', 'Idioma del Usuario', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::select('language', ['spanish' => 'Español'], null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Iimagen', 'Image', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    <input id="imagen" type="file"  class="form-control" name="imagen" value="{{ old('imagen') }}" accept="image/png,image/gif,image/jpeg" onchange="readURL(this);">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('users.index')}}" class="btn btn-default pull-left">Cancelar</a>
                            {!! Form::submit('Registrar', ['class' => 'btn btn-success pull-right']) !!}
                        </div>
                        <!-- /.box-footer -->
                        {!! Form::close() !!}
                    </div>

                </div>
                <!-- /.row -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
