@extends('main')
@section('title','Administrador')
@section('nav')
@include('admin.nav')
@endsection
@section('content')

<div class="row">
  <div class="valign-wrapper minh-400 col l12">
    <h1 class="valign center" style="width: 100%">Bienvenido</h1>
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