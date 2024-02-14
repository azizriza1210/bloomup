<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $client = new Client();
        $apiKey = '5c235fc474d0cd51ea72be55744d239d';
        $url = "https://gnews.io/api/v4/search?q=plant%20care&lang=en&apikey=$apiKey";

        $response = $client->request('GET', $url);
        $body = $response->getBody();
        $news = json_decode($body)->articles;

        $limitedNews = collect($news)->take(3); // Batasi hanya 3 berita yang ditampilkan

        return view('home', ['news' => $limitedNews]);
    }
}
