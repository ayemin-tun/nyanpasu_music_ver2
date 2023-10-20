<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        $musics = Music::all();
        return view('music', compact('musics'));
    }
    public function musicDetail($id)
    {
        $music = Music::find($id)->toArray();
        return view('musicdetail', compact('music'));
    }
}
