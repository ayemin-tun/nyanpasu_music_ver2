<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('home', [
            'allMusics' => Music::latest('id')->take(6)->get(),
            'allMusicsCarousel' => Music::latest('id')->take(5)->get()->toArray(),
            'latestMusic' => Music::latest('created_at')->first()
        ]);
    }
}
