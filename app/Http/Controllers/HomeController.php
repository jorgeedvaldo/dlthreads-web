<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function downloadByLink(Request $request)
    {
        $response = Http::get('https://jorgeedvaldo-probable-enigma-rr46pvx9w5x2p46w-3000.preview.app.github.dev/?postid=' . $request->url);
    
        $JSONData = $response->json();

        return $JSONData;
    }
}
