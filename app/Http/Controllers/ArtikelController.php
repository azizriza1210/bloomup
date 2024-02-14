<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ArtikelController extends Controller
{
    public function index()
    {
        $newskey=env('NEWS_API_KEY');
        $response = Http::get('https://newsapi.org/v2/top-headlines?country=us&apiKey=2efb5734ec4d4009a45bf31bf2fb9fda');
        $news = $response->json();
        // dd($news);
        $newsdata = $news['articles'];
        return view('artikel');

    }
}
