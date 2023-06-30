<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = DB::table('articles')
                    ->orderBy('created_at','desc')
                    ->get();
        return view('articles.index',[
            'articles' => $articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => ['string','required','max:120'],
            'body' => ['string','required','max:1500'],
            'image' => ['max:1999','mimes:png,jpg,gif,jpg,']
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();

            $diff = $name .'.'.time();

            $path = $request->file('image')->storeAs('images',$diff, 'public');

        }else {
            $diff = 'noimage.jpg';
        }

        // Article::create([
        //     'title' => $request->input('title'),
        //     'body' => $request->input('body'),
        //     'image' => $diff,

        // ]);

        $article = new Article();
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->image = $diff;
        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $article = DB::table('articles')->find($article);
        return view('articles.show', [
            'article ' => $article,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
