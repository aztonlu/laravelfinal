@extends('admin.partials.main')
@section('title', 'Editar usuario')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User
                <small>Edit</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Users</a></li>
                <li class="active">Edit</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-xs-12">
                    @include('flash::message')
                </div>
                <div class="col-lg-8 col-xs-12">
                    <!-- small box -->
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit "{{$user->name}}"</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['route' => ['users.update', $user],'method' => 'PUT', 'class'=>'form-horizontal']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('name', 'Full Name', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'Email', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'ejemplo@terandes.com', 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('facebook', 'Facebook Link', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('facebook',$user->facebook, ['class' => 'form-control', 'placeholder' => 'https://www.facebook.com/userperson']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('twitter', 'Twitter Link', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('twitter', $user->twitter, ['class' => 'form-control', 'placeholder' => 'https://twitter.com/userperson']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('linkedin', 'LinkedIn Link', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('linkedin', $user->linkedin, ['class' => 'form-control', 'placeholder' => 'https://www.linkedin.com/in/userperson/']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('language', 'User Language', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::select('language', ['spanish' => 'Spanish', 'german' => 'German', 'english' => 'English','italian' => 'Italian','french' => 'French'], $user->language, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            @if(Auth::user()->type == "admin")
                            <div class="form-group">
                                {!! Form::label('type', 'User Type', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], $user->type, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            @endif 
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('users.index')}}" class="btn btn-default pull-left">Cancelar</a>
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