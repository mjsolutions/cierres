@extends('main')
@section('title','Usuarios')
@section('nav')
@include('admin.nav')
@endsection
@section('content')

<div class="container">
	<div class="card-panel">
		<div class="row">
			<div class="col push-s1 s10 center-align">
        <h4>Usuarios</h4>
      </div>
      <div class="col pull-s1 s1">
        <a class="btn-floating btn-large waves-effect waves-light green tooltipped" data-position="right" data-delay="50" data-tooltip="Nuevo Usuario" href="{!! route('usuarios.create') !!}"><i class="material-icons">add</i></a>
      </div>
    </div>
    <div class="row">
     <div class="col s8 col-center divider"></div>
   </div>
   <div class="row">
     {!! Form::open(['route'=>['admin.usuarios.busqueda'], 'method'=>'GET']) !!}
     <div class="col l6 offset-l4 input-field mt-0">
      <i class="material-icons prefix">search</i>
      {!! Form::text('data', null, ['class'=>'validate','id'=>'data','required'=>'required']) !!}
      <label for="icon_prefix2">(Nombre, Apellido, Email)</label>
    </div>
    <div class="col l2">
      {!! Form::submit('Buscar',['class'=>'btn btn-block waves-effect waves-light']) !!}
    </div>
    {!! Form::close() !!}
  </div>
  <table class="responsive-table centered">
   <thead>
    <tr>
     <th data-field="id">Id</th>
     <th data-field="name">Nombre</th>
     <th data-field="email">Email</th>
     <th data-field="option">Opciones</th>
   </tr>
 </thead>
 <tbody>

@foreach($usuarios as $usuario)
<tr>
 <td>{{ $usuario->id }}</td>
 <td>{{ $usuario->name }} {{ $usuario->last_name }}</td>
 <td>{{ $usuario->email }}</td>
 <td>
  <a href="{!! route('usuarios.edit', $usuario->id) !!}" class="btn-floating btn-small waves-effect waves-light amber accent-3 mr-5 tooltipped" data-position="right" data-delay="50" data-tooltip="Editar"><i class="material-icons">edit</i></a>
  @if($usuario->id != 1)
  <a href="{!! route('usuarios.destroy', $usuario->id) !!}" class="btn-floating btn-small waves-effect waves-light  red darken-1 mr-5 tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar"><i class="material-icons">delete</i></a>
  @endif
  <a class="btn-floating btn-small waves-effect waves-light  grey darken-1 tooltipped" data-position="right" data-delay="50" data-tooltip="Cambiar Contraseña" onclick="change_password({{ $usuario->id }}, '{{ $usuario->name }}')"><i class="material-icons">vpn_key</i></a>
</td>
</tr>
@endforeach
</tbody>
</table>

<div id="change_password" class="modal plr-10">
  <div class="modal-content">
    <div class="row">
      <div class="col l5 center">
        <h5>Cambiar contraseña para <span id="cp_nombre"></span></h5>
        <div class="divider"></div>     
      </div>
      <div class="col l7">
        {!! Form::open(['route' => ['admin.usuarios.change_password'], 'method' => 'POST', 'id' => 'form_changep']) !!}
        
        <div class="input-field">
          <i class="material-icons prefix">vpn_key</i>
          {!! Form::label('password_admin','Contraseña de Administrador') !!}
          {!! Form::password('password_admin', null, ['class'=>'validate','required']) !!}
        </div>

        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          {!! Form::label('password','Nueva contraseña') !!}
          {!! Form::password('password', null, ['class'=>'validate','required']) !!}
        </div>

        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          {!! Form::label('password_confirmation','Confirme nueva contraseña') !!}
          {!! Form::password('password_confirmation', null, ['class'=>'validate','required']) !!}
        </div>

        {!! Form::hidden('id', null, ['id' => 'id']) !!}

        <div class="input-field right-align">
          <button href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" type="reset">Cerrar</button>
          {!! Form::submit('Guardar',['class'=>'btn waves-effect btn-block waves-light green']) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

{{-- <div class="center-align">
 {!! (new Landish\Pagination\Materialize($usuarios))->render() !!}
</div> --}}
</div>
</div>

@endsection

@section('scripts')
@if($errors)
  @foreach($errors->all() as $error)
    Materialize.toast('{{ $error }}', 4000);
  @endforeach
@endif

function change_password(id, nombre) {
  $("#cp_nombre").html(nombre);
  $('#id').val(id);
  $("#change_password").openModal();
}

@endsection