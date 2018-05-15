use Illuminate\Support\Facades\Auth; 
@extends('admin.partials.main')
@section('title', 'Registrar Blogs')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blog 
                <small>Nuevo</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Escritorio</a></li>
                <li><a href="#">Blogs</a></li>
                <li class="active">Nuevo</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                {{-- Validamos el formulario si cumple con el request de testimonio --}}
                @include('admin.partials.errors')

                <div class="col-lg-8 col-xs-12">
                    <!-- small box -->
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Agregar Blog</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['route' => 'blogs.store','method' => 'POST', 'class'=>'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('name', 'Nombre del Blog', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'titulo', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('descripcion', 'Descripción', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descripción']) !!}
                                </div>
                            </div>
                            <?php $user = Auth::user();
                            ?>
                            @if($user->language == 'Admin')
                            <div class="form-group">
                                {!! Form::label('idioma', 'Idioma', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    <select name = 'idioma'>
                                    <option value='french'>Frances
                                    </option>
                                    <option value="spanish">Español
                                    </option>
                                    <option value="german">German
                                    </option>
                                    <option value="italian">Italia
                                    </option>
                                    <option value="english">Ingles
                                    </option>
                                    </select>
                                </div>
                            </div>
                            @endif
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('blogs.index')}}" class="btn btn-default pull-left">Cancelar</a>
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