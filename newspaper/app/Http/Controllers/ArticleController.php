<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $articles = Article::all();
        return view('articleList', [
            'articles' => $articles
        ]);
    }

    public function dragon() {
        $dragons = Article::where('category', 'Dragon Dressage')->get();

        return view('dragonDressage', [
            'dragons' => $dragons
        ]);
    }
    public function anboJitsu() {
        $anboJitsu = Article::where('category', 'Anbo-Jitsu')->get();

        return view('anboJitsu', [
            'anboJitsu' => $anboJitsu
        ]);
    }
    public function blernsball() {
        $blernsball = Article::where('category', 'blernsball')->get();

        return view('blernsball', [
            'blernsball' => $blernsball
        ]);
    }
    
    public function sewer() {
        $sewers = Article::where('category', 'Sewer Surfin')->get();

        return view('sewerSurfin', [
            'sewers' => $sewers
        ]);
    }

    public function fotBoule() {
        $fots = Article::where('category', 'Fot-Boule')->get();

        return view('fotBoule', [
            'fots' => $fots
        ]);
    }

    public function quidditch() {
        $quidditchs = Article::where('category', 'Quidditch')->get();

        return view('quidditch', [
            'quidditchs' => $quidditchs
        ]);
    }

    public function lightsaber() {
        $lightsabers = Article::where('category', 'Lightsaber fencing')->get();

        return view('lightsaber', [
            'lightsabers' => $lightsabers
        ]);
    }

    public function dejarik() {
        $dejariks = Article::where('category', 'Dejarik')->get();

        return view('dejarik', [
            'dejariks' => $dejariks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    public function secret() {
        if(Gate::allows('superUsers-only', auth()->user())) {
            return view('secret');
        }
        return view('welcome');
    }
}

