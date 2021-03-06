<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

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

    public function frontPage() {
        $articles = Article::whereBetween('rank', [1, 2, 3])->orderBy('created_at', 'DESC')->get();

        return view('welcome', [
            'firstRankedArticles' => $articles
        ]);
    }

    public function dragon() {
        $dragons = Article::where('category', 'Dragon Dressage')->orderBy('created_at', 'DESC')->get();

        return view('dragonDressage', [
            'dragons' => $dragons
        ]);
    }
    public function anboJitsu() {
        $anboJitsu = Article::where('category', 'Anbo-Jitsu')->orderBy('created_at', 'DESC')->get();

        return view('anboJitsu', [
            'anboJitsu' => $anboJitsu
        ]);
    }
    public function blernsball() {
        $blernsball = Article::where('category', 'blernsball')->orderBy('created_at', 'DESC')->get();

        return view('blernsball', [
            'blernsball' => $blernsball
        ]);
    }
    
    public function sewer() {
        $sewers = Article::where('category', 'Sewer Surfin')->orderBy('created_at', 'DESC')->get();

        return view('sewerSurfin', [
            'sewers' => $sewers
        ]);
    }

    public function fotBoule() {
        $fots = Article::where('category', 'Fot-Boule')->orderBy('created_at', 'DESC')->get();

        return view('fotBoule', [
            'fots' => $fots
        ]);
    }

    public function quidditch() {
        $quidditchs = Article::where('category', 'Quidditch')->orderBy('created_at', 'DESC')->get();

        return view('quidditch', [
            'quidditchs' => $quidditchs
        ]);
    }

    public function lightsaber() {
        $lightsabers = Article::where('category', 'Lightsaber fencing')->orderBy('created_at', 'DESC')->get();

        return view('lightsaber', [
            'lightsabers' => $lightsabers
        ]);
    }

    public function dejarik() {
        $dejariks = Article::where('category', 'Dejarik')->orderBy('created_at', 'DESC')->get();

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
        return view('create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'headline' => 'required',
            'category' => 'required',
            'text' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('create')
            ->withErrors($validator)
            ->withInput();
        }
        Article::create($request->all());
        $articles = Article::all();
    
        return redirect('')->with('success', 'Article has been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $article = Article::find($id);
        return view('singleArticle', [
            'article' => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     *     public function edit(Article $article)

     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('editArticle', [
            'article' => $article
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     * 
     * public function update(Request $request, Article $article)
     */


    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->headline = Input::get('headline');
        $article->category = Input::get('category');
        $article->save();

        return redirect('')->with('success', 'Article has been updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
   
        public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('')->with('success', 'Article has been deleted successfully!');
    }
    

    public function secret() {
        $articles = Article::whereBetween('rank', [1, 2, 3])->orderBy('rank', 'ASC')->get();

        if(Gate::allows('superUsers-only', auth()->user())) {
            return view('secret');
        } else if(Gate::allows('user', auth()->user())) {
            return view('welcome', [
                'firstRankedArticles' => $articles
            ]);
        }

        return view('welcome', [
            'firstRankedArticles' => $articles
        ]);
    }
}

