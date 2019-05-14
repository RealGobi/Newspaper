@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Dragon Dressage</h1>
    @if (count($dragons) > 0)

    @foreach($dragons as $dragon) 
        <li>{{ $dragon->headline }}</li>
    
    
    @endforeach
    @endif

    </div>

@endsection