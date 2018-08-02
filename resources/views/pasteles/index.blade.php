@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-10 col-md-push-2">
      <a class="btn btn-success pull-right" href="{{ url('/pasteles/create') }}" role="button">Nuevo pastel</a>
      @include('pasteles.partials.table')      
    </div>

  </div>

</div>
@endsection
