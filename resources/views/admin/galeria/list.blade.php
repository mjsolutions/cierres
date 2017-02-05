@extends('main')
@section('title','Galeria')
@section('nav')
@include('admin.nav')
@endsection
@section('content')

<div class="container">
  <div class="card-panel">
    <div class="row">
      <div class="col push-s1 s10 center-align">
        <h4>Galería</h4>
      </div>
      <div class="col pull-s1 s1">
        <a class="btn-floating btn-large waves-effect waves-light green tooltipped" data-position="right" data-delay="50" data-tooltip="Nuevo Elemento" href="{!! route('galeria.create') !!}"><i class="material-icons">add</i></a>
      </div>
    </div>
    <div class="row">
     <div class="col s8 col-center divider"></div>
   </div>
   <div class="row">
     {!! Form::open(['route'=>['admin.galeria.busqueda'], 'method'=>'GET']) !!}
     <div class="col l6 offset-l4 input-field mt-0">
      <i class="material-icons prefix">search</i>
      {!! Form::text('data', null, ['class'=>'validate','id'=>'data','required'=>'required']) !!}
      <label for="icon_prefix2">(Nombre, tipo, descripción)</label>
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
     <th data-field="sucursal">Tipo</th>
     <th data-field="descripcion">Descripción</th>
     <th data-field="option">Opciones</th>
   </tr>
 </thead>
 <tbody>

@foreach($galeria as $gallery)
<tr>
 <td>{{ $gallery->id }}</td>
 <td>{{ $gallery->nombre }}</td>
 <td>{{ $gallery->tipo }}</td>
 <td class="truncate">{{ $gallery->descripcion }}</td>
 <td>
  <a href="{!! route('galeria.edit', $gallery->id) !!}" class="btn-floating btn-small waves-effect waves-light amber accent-3 mr-5 tooltipped" data-position="right" data-delay="50" data-tooltip="Editar"><i class="material-icons">edit</i></a>
  <a href="{!! route('galeria.destroy', $gallery->id) !!}" class="btn-floating disabled btn-small waves-effect waves-light  red darken-1 mr-5 tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar"><i class="material-icons">delete</i></a>
</td>
</tr>
@endforeach
</tbody>
</table>

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
@endsection