@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Dejarik</h1>
    @if (count($dejariks) > 0)

    @foreach($dejariks as $dejarik) 
        <li>{{ $dejarik->headline }}</li>
    
    
    @endforeach
    @endif

    </div>

@endsection