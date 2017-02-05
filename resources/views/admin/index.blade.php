@extends('main')
@section('title','Administrador')
@section('nav')
@include('admin.nav')
@endsection
@section('content')

<div class="row">
    <div class="valign-wrapper center minh-400 col m12">
    <h1 style="width: 100%">BIENVENIDO</h1>
  </div>
</div>
<div class="row">
  <div class="valign-wrapper col m8">
    <div class="jimenez">
    	<img class="img-jimenez" src="{{ asset('images/Mr_Don_Sr_Jimenez.png') }}">
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