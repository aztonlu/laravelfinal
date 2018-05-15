@extends('admin.partials.main')
@section('title', 'Registrar usuario')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User
                <small>New</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#">Users</a></li>
                <li class="active">New</li>
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
                                {!! Form::label('name', 'Full Name', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Full name', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'Email', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@terandes.com', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('facebook', 'Facebook Link', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'https://www.facebook.com/userperson']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('twitter', 'Twitter Link', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => 'https://twitter.com/userperson']) !!}
                                </div>
                            </div>

                            <div class="form-group">
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
                                {!! Form::label('type', 'User Type', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::select('type', ['member' => 'Member', 'admin' => 'Administrator'], null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('languageLabel', 'User Language', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::select('language', ['spanish' => 'Spanish', 'english' => 'English', 'italian' => 'Italian', 'frech' => 'French', 'german' => 'German'], null, ['class' => 'form-control']) !!}
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
                            <a href="{{route('users.index')}}" class="btn btn-default pull-left">Cancel</a>
                            {!! Form::submit('Register', ['class' => 'btn btn-success pull-right']) !!}
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