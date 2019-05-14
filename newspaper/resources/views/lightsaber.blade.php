@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Lightsaber Fencing</h1>
    @if (count($lightsabers) > 0)

    @foreach($lightsabers as $lightsaber) 
    <li><a href="{!! url('articles/'.$lightsaber->id) !!}">{!! $lightsaber->headline !!}</a></li>
    
    
    @endforeach
    @endif

    </div>

@endsection