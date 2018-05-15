@extends('admin.partials.main')
@section('title', 'Editar Sub-categoría')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sub-Categoría
                <small>Nuevo</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}/admin"><i class="fa fa-dashboard"></i> Escritorio</a></li>
                <li><a href="{{url('')}}/admin/subcategories">Sub-Categorías</a></li>
                <li class="active">Editar</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                {{-- Validamos el formulario si cumple con el request de usuario --}}
                @include('admin.partials.errors')

                <div class="col-lg-8 col-xs-12">

                    <!-- Chat box -->
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title">Agregar sub-categoría</h3>
                        </div>

                        <!-- form start -->
                        {!! Form::open(['route' => ['subcategories.update', $subcategory], 'method' => 'PUT', 'class'=>'form-horizontal']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('category_id', 'Categoría', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::select('category_id', $categories, $subcategory->category->id, ['class' => 'form-control', 'placeholder' => 'Seleccione categoría', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('name', 'Sub-categoría', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('name', $subcategory->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la sub-categoría', 'required']) !!}
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('categories.index')}}" class="btn btn-default pull-left">Cancelar</a>
                            {!! Form::submit('Actualizar', ['class' => 'btn btn-success pull-right']) !!}
                        </div>
                        <!-- /.box-footer -->
                        {!! Form::close() !!}
                    </div>
                    <!-- /.box (chat box) -->

                </div>
                <!-- /.row -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection