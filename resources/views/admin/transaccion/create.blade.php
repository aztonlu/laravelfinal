@extends('admin.partials.main')
@section('title', 'Crear transaccion')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Boletos
                <small>Nuevo</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#">Boletos</a></li>
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
                            <h3 class="box-title">Registrar boleto</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['route' => 'transaccion.store','method' => 'POST', 'class'=>'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('dni', 'Dni', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Dni', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('boleto', 'Boleto', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('boleto', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el N° de boleto', 'required']) !!}
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('buses.index')}}" class="btn btn-default pull-left">Cancelar</a>
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
