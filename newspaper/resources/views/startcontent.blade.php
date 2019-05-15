@extends('articles')

<!doctype html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Fantasy Sport News</title>

    <link href="{{asset('scss/style.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <section class="content-container">
    <div class="side-add"></div>
    <div class="content">


        <h1>Welcome</h1>


        <div>
            @if (count($firstRankedArticles) > 0)

            @foreach($firstRankedArticles as $article)
            <li><a href="{!! url('articles/'.$article->id) !!}" class="articlelink">
                    <div class="front-page-article-headline">{!! $article->headline !!}</div><span class="front-page-article-text">{!! substr($article->text, 0, 200) !!}...</span>
                </a></li>
            @endforeach
            @endif
        </div>
    </div>
    <div class="side-add"></div>
    </section>
</body>

</html>