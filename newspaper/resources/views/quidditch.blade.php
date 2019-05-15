@extends('articles')
@extends('header')
    
@section('main')
<div>
    <h1>Quidditch</h1>
    @if (count($quidditchs) > 0)

    @foreach($quidditchs as $quidditch) 
    


<li><a href="{!! url('articles/'.$quidditch->id) !!}" class="articlelink">{!! $quidditch->headline !!}</a></li>
      

    @endforeach
    @endif

    </div>

@endsection


