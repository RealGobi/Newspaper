@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Quidditch</h1>
    @if (count($quidditchs) > 0)

    @foreach($quidditchs as $quidditch) 
        <li>{{ $quidditch->headline }}</li>
    
    
    @endforeach
    @endif

    </div>

@endsection