@extends('app')

@section('content')
    {!! Form::open([ 'route' => 'pasteles.store', 'method' => 'POST']) !!}
        @include('pasteles.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection
