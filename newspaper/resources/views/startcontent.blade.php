@extends('articles')

<?php 
$numberL = mt_rand(1, 5); 
$numberR = mt_rand(1, 5);
?>

<!doctype html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Fantasy Ludis Nuntium</title>

    <link href="{{asset('scss/style.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <section class="content-container">
        @cannot('user')
        <img class="side-add" src="../public/img/{{$numberL}}.png">
        @endcannot
        <div class="content">
        @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

            <h1>Top Nuntium</h1>

            @cannot('user')
          <img class="top-add" src="{{URL::to('/')}}/img/top-add.png">
            @endcannot

            <div>
                @if (count($firstRankedArticles) > 0)
                <div class="single-article-div">
                    @foreach($firstRankedArticles as $article)
                    <li><a href="{!! url('articles/'.$article->id) !!}" class="articlelink">
                            <div class="front-page-article-headline">{!! $article->headline !!}</div><span class="front-page-article-text">{!! substr($article->text, 0, 200) !!}...</span>
                        </a></li>
                    <span style="width: 100%; height:5rem; overflow:hidden;"><img src="{{ $article->img }}"></span>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        @cannot('user')
        <img class="side-add" src="../public/img/{{$numberR}}.png">
        @endcannot
    </section>
</body>

</html>