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
        $response = Http::get('https://teste.anamarartes.com/?q=' . $request->url);
    
        $JSONData = $response->json();
          
        dd($jsonData);
    }
}
