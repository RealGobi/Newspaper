@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Lightsaber Fencing</h1>
    @if (count($lightsabers) > 0)

    @foreach($lightsabers as $lightsaber) 
        <li>{{ $lightsaber->headline }}</li>
    
    
    @endforeach
    @endif

    </div>

@endsection