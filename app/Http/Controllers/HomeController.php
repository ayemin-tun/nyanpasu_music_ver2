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
            'allMusics' => Music::take(3)->get(),
            'latestMusic' => Music::latest('created_at')->first()
        ]);
    }
}
