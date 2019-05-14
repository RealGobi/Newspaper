@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Blernsball</h1>
    @if (count($blernsball) > 0)

    @foreach($blernsball as $blernball) 
        <li>{{ $blernball->headline }}</li>
    
    
    @endforeach
    @endif

    </div>

@endsection