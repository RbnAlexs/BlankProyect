@extends('layouts.app')

@section('content')
    <a class="btn btn-success pull-right" href="{{ url('/pasteles/create') }}" role="button">Nuevo pastel</a>
    @include('pasteles.partials.table')
@endsection
