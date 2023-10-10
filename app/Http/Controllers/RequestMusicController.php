<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestMusic;
use App\Models\RequestMusic as ModelsRequestMusic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RequestMusicController extends Controller
{
    public function RequestMusic(RequestMusic $request)
    {
        // Get the user's IP address
        $ipAddress = Request()->ip();

        // Check if a request with the same IP address already exists
        $existingRequest = ModelsRequestMusic::where([
            'ip_address' => $ipAddress,
        ])->first();

        if ($existingRequest) {
            return Redirect::back()->with('error', 'You have already submitted a request.');
        }

        // If not, proceed to save the request
        $req_music = new ModelsRequestMusic;
        $req_music->ip_address = $ipAddress;
        $req_music->user_name = $request->user_name;
        $req_music->music_name = $request->music_name;
        $req_music->anime_name = $request->anime_name;
        $req_music->comment = $request->comment;
        $req_music->save();

        return Redirect::back()->with('success', 'Request has been submitted successfully.');
    }
}
