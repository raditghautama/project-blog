<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Province;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $provinces = Province::all();
        $articles = Article::orderBy('id', 'DESC')->get();

        return view('pages.home.index', [
            'title' => 'Articles',
            'provinces' => $provinces,
            'articles' => $articles,

        ]);
    }

    

    public function province($slug)
    {
        $province = Province::where('slug', $slug)->first();
        $provinces = Province::all();
        if ($province == NULL) {
            $articles = Article::all();
        } else {
            $articles = Article::where('provinsi_id', $province->id)->orderBy('id', 'DESC')->get();
        }

        return view('pages.home.province', [
            'title' => 'Province',
            'province' => $province,
            'provinces' => $provinces,
            'articles' => $articles,
        ]);
    }

    public function detail($slug)
    {
        $articles = Article::where('slug', $slug)->first();
        $provinces = Province::all();

        return view('pages.home.detail', [
            'title' => 'Detail',
            'articles' => $articles,
            'provinces' => $provinces,
        ]);
    }


}
