@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!


                    <div class="panel-heading"><h3 class="panel-title">Forumulario de contacto</h3></div>
             <div class="panel-body">
               {!! Form::open(['route' => 'mail.store'])!!}
                 
                     {!! Form::text('name','null',['placeholder'=>'Nombre']) !!}
                     {!! Form::text('email','null',['placeholder'=>'Email']) !!}
                     {!! Form::textarea('mensaje','null',['placeholder'=>'Mensaje']) !!}
                 
                 <div class="form-group">
                     {!! Form::submit('SEND') !!}
                 </div>
               {!! Form::close() !!}
             </div>
           </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
