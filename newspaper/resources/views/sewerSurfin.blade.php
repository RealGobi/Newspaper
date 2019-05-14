@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Sewer Surfin</h1>
    @if (count($sewers) > 0)

    @foreach($sewers as $sewer) 
        <li>{{ $sewer->headline }}</li>
    
    
    @endforeach
    @endif

    </div>

@endsection