@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Fot-Boule</h1>
    @if (count($fots) > 0)

    @foreach($fots as $fot) 
        <li>{{ $fot->headline }}</li>
    
    
    @endforeach
    @endif

    </div>

@endsection