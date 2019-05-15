@extends('articles')

<!doctype html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">


        <title>Fantasy Ludis Nuntium</title>

        <link href="{{asset('scss/style.css')}}" rel="stylesheet" type="text/css"/>
                 </head>
    <body>
            <div class="content">


          
            <h1>Top Nuntium</h1>
            

    <div>
    @if (count($firstRankedArticles) > 0)
    <div class="single-article-div">
         @foreach($firstRankedArticles as $article) 
        <li><a href="{!! url('articles/'.$article->id) !!}" class="articlelink"><div class="front-page-article-headline">{!! $article->headline !!}</div><span class="front-page-article-text">{!! substr($article->text, 0, 200) !!}...</span></a></li>
        <span style="width: 100%; height:5rem; overflow:hidden;"><img src="{{ $article->img }}"></span>
        @endforeach
    </div>
    @endif
    </div>
            </div>
       
    </body>
</html>
