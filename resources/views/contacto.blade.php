@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!--

@extends('app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col col-md-6 col-md-offset-3"   >
           <div class="panel panel-default">
             <div class="panel-heading"><h3 class="panel-title">Forumulario de contacto</h3></div>
             <div class="panel-body">
               {!! Form::open(['route' => 'send', 'method' => 'post']) !!}
                 <div class="form-group">
                     {!! Form::label('email', 'E-Mail') !!}
                     {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
                 </div>
                 <div class="form-group">
                     {!! Form::label('subject', 'Asunto') !!}
                     {!! Form::text('subject', null, ['class' => 'form-control' ]) !!}
                 </div>
                 <div class="form-group">
                     {!! Form::label('body', 'Mensaje') !!}
                     {!! Form::textarea('body', null, ['class' => 'form-control' ]) !!}
                 </div>
                 <div class="form-group">
                     {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                 </div>
               {!! Form::close() !!}
             </div>
           </div>
        </div>
   </div>
</div>
@endsection






<h1>Contactenos</h1>

<div class="main-contact">
<h3 class="head">Contacto</h3>
<div class="contact-form">
    {!!Form::open([''])!!}
    <div class="col-md-6 contact-left">
    {!!Form::text('name',null,['placeholder' => 'Nombre'])!!}
    {!!Form::text('email',null,['placeholder' => 'Email'])!!}
    </div>
    <div class="col-md-6 contact-right">
        {!!Form::textarea('mensaje',null,['placeholder' => 'Mensaje'])}
    </div>
    {!!Form::submit('SEND')!!}
    {!!Form::close()!!}
</div>
    

</div>
-->



<!--

<div class="form-group">
  <label class="col-md-4 control-label">Nombres</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder="Nombres" class="form-control"  type="text">
    </div>
  </div>
</div>


       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail" class="form-control"  type="text">
    </div>
  </div>
</div>

  
<div class="form-group">
  <label class="col-md-4 control-label">Mensaje</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea class="form-control" name="comment" placeholder="Mensaje"></textarea>
  </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Enviar <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div>-->