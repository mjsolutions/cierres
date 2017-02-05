@extends('main')
@section('title','Galeria | Nuevo')
@section('nav')
@include('admin.nav')
@endsection
@section('content')
{!! Form::open(['route'=>'galeria.store', 'method'=>'POST']) !!}
<div class="container">
  <div class="card-panel">
    <div class="center-align">
      <h3>Nuevo elemento de Galería</h3>
    </div>

    <div class="row">
      <div class="col s8 col-center divider"></div>
    </div>
    
    <div class="row">
      <div class="col l4">
        <div class="input-field">
          <i class="material-icons prefix">info</i>
          {!! Form::label('nombre','Nombre') !!}
          {!! Form::text('nombre', null, ['class'=>'validate','required']) !!}
        </div>      
      </div>

      <div class="col l4">
        <div class="input-field">
          <i class="material-icons prefix">info</i>
          {!! Form::label('tipo','tipo') !!}
          {!! Form::text('tipo', null, ['class'=>'validate','required']) !!}
        </div>
      </div>

      <div class="col l4">

        <div class="file-field input-field">
          <div class="btn">
            <span>Archivo</span>
            {!! Form::file('archivo', null, ['class'=>'file-path validate','required']) !!}
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col l12">
        <div class="input-field">
          <i class="material-icons prefix">description</i>
          {!! Form::label('descripcion','Descripcion') !!}
          {!! Form::textarea('descripcion', null, ['class'=>'materialize-textarea validate','required']) !!}
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