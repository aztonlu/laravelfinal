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

                <!-- form start 
                    {!! Form::open(['route' => 'tours.store','method' => 'POST', 'class'=>'form-horizontal', 'files' => TRUE]) !!}-->
                <form class="form-horizontal" action="{{ url('') }}/saveJournal" method="POST"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-lg-12 col-xs-12">
                        <!-- small box -->
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Add Journal</h3>
                            </div>
                            <div class="box-body">


                                <hr>
                                <div class="form-group">
                                    {!! Form::label('nameJournalLabel', 'Title', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('nameJournal', "-", ['class' => 'form-control', 'placeholder' => '', 'required','id' => 'nameJournal']) !!}
                                        <input type="hidden" name="idTour" value="{{ $tour[0]->id }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('descriptionLabel', 'Summary', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows'=>'3', 'placeholder' => '','id' => 'description']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                        {!! Form::label('etapeJournal', 'Choose Etapes', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            @foreach($tags as $tag)
                                            <div class="col-sm-2">
                                                <div class="checkbox">
                                                    <label>
                                                    <input type="checkbox" name="etapeJournal[]" value="{{ $tag->name }}">{{ $tag->name }}</label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    
                                </div>

                                <div class="form-group">
                                    {!! Form::label('stayLabel', 'Stay', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('stay', null, ['class' => 'form-control', 'placeholder' => 'Write a State', 'required','id' => 'stay']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('transportLabel', 'Transport', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('transport', null, ['class' => 'form-control', 'placeholder' => 'Write a State', 'required','id' => 'transport']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                     {!! Form::label('imageLabel', 'Select an Image', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input id="journalImage" type="file"  class="form-control" name="journalImage" value="{{ old('imagen') }}" accept="image/png,image/gif,image/jpeg" required>
                                            <span id="spanImage"></span>
                                              <br>
                                              <h6 id="mensajeImagen" style="color: red"></h6>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                
                            </div>
                        </div>
                         <div class="box-footer">
                                <a href="{{route('tours.index')}}" class="btn btn-default pull-left">Cancelar</a>
                                {!! Form::submit('Next Jornal', ['class' => 'btn btn-info pull-right']) !!}
                                <a href="{{url('')}}/saveOrganization/{{ $tour[0]->id }}" class="btn btn-info pull-right">Go to Organizations</a>
                                
                            </div>
                    </div>  
                </form>


            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script>
        $(document).ready(function(){
            document.getElementById("nameJournal").value = "";
            document.getElementById("description").value = "";
            document.getElementById("stay").value = "";
            document.getElementById("transport").value = "";
            


        });
    </script>
@endsection