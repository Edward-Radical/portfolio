<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// aggiungere namespace
use App\Models\Sound;

class SoundController extends Controller
{
    //
    public function projects(){

        $sound = Sound::get();
        
        return view ('link1', [
            'sound' => $sound,
        ]);
    }

    public function show(\App\Models\Sound $sound)
    {
        return view('single', compact('sound'));
    }


}

