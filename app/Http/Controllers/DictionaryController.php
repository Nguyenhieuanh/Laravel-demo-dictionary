<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function translate(Request $request)
    {
        $words = [
            'one' => 'Mot',
            'two' => 'Hai',
            'three' => 'Ba'
        ];
        $keyword = $request->keyword;
        foreach ($words as $key => $word) {
            if ($keyword == $key) {
                $msg = $keyword . ' : ' . $word;
                return view('dictionary', compact('msg'));
            }
        }
        $msg = "not found";
        return view('dictionary', compact('msg'));
    }
}
