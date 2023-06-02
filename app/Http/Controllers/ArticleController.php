<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Article::with('province')->get();

        return view('pages.articles.index', [
            'items' => $items,
            'title' => 'All Articles'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::all();

        return view('pages.articles.create', [
            'provinces' => $provinces,
            'title' => 'Create New Articles'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        $data['cover'] = $request->file('cover')->store('articles', 'public');

        Article::create($data);
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Article::findOrFail($id);
        $provinces = Province::all();

        return view('pages.articles.edit', [
            'provinces' => $provinces,
            'item' => $item,
            'title' => 'Edit Articles'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        if (!empty($data['cover'])) {
            $data['cover'] = $request->file('cover')->store('articles', 'public');
        } else {
            unset($data['cover']);
        }

        Article::findOrFail($id)->update($data);
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Article::findOrFail($id)->delete();
        return redirect()->route('artikel.index');
    }
}
