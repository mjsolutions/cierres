@extends('main')
@section('title','Usuarios | Nuevo')
@section('nav')
@include('admin.nav')
@endsection
@section('content')
{!! Form::open(['route'=>'usuarios.store', 'method'=>'POST']) !!}
<div class="container">
  <div class="card-panel">
    <div class="center-align">
      <h3>Nuevo Usuario</h3>
    </div>

    <div class="row">
      <div class="col s8 col-center divider"></div>
    </div>
    <div class="row left-align">
      <div class="col l12">
        <h5>Datos Generales</h5>
      </div>
    </div>
    
    <div class="row">
      <div class="col l4">
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          {!! Form::label('name','Nombre(s)') !!}
          {!! Form::text('name', null, ['class'=>'validate','required']) !!}
        </div>      
      </div>

      <div class="col l4">
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          {!! Form::label('last_name','Apellido paterno') !!}
          {!! Form::text('last_name', null, ['class'=>'validate','required']) !!}
        </div>
      </div>

      <div class="col l4">
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          {!! Form::label('second_name','Apellido materno') !!}
          {!! Form::text('second_name', null, ['class'=>'validate','required']) !!}
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col l4">
        <div class="input-field">
          <i class="material-icons prefix">email</i>
          {!! Form::label('email','Email') !!}
          {!! Form::email('email', null, ['class'=>'validate','required']) !!}
        </div>
      </div>


      <div class="col l4">
        <div class="input-field">
          <i class="material-icons prefix">lock</i>
          {!! Form::label('password', 'Contraseña') !!}
          {!! Form::password('password', ['class' => 'validate', 'required']) !!}
        </div>
      </div>

      <div class="col l4">
        <div class="input-field">
          <i class="material-icons prefix">lock</i>
          {!! Form::label('password_confirmation', 'Verifique contraseña') !!}
          {!! Form::password('password_confirmation', ['class' => 'validate', 'required']) !!}
        </div>
      </div>

    </div>

    <div class="input-field center-align">
      {!! Form::submit('Guardar',['class'=>'btn btn-large btn-block btn-block-large waves-effect waves-light']) !!}
    </div>
  </div>

</div>
{!! Form::close() !!}

@endsection
@section('scripts')
@if($errors)
@foreach($errors->all() as $error)
Materialize.toast('{{ $error }}', 4000);
@endforeach
@endif
@endsection
@section('scripts-2')
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
@endsection