@extends('articles')
@extends('header')

@section('main')


<div>

<h2>{{$article->headline }}</h2>

  <p>Category: {{ $article->category }}</p>
<p> {{ $article->text}} </p>


{!! Form::open(['route' => ['articles.edit', $article->id], 'method' => 'post']) !!}
   {{ method_field('GET')}}

<div class="formgroup">
<input type="submit" class="btn btn-warning" value="Edit article">
</div>
{!! Form::close() !!}

</div> 



@endsection


