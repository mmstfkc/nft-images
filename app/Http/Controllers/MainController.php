<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function look(Request $request)
    {
        $file = $request->file->get();

        $r = Http::withHeaders
        (['Authorization' => 'Bearer ' . env("Authorization")])
            ->withBody($file, 'image/jpg')
            ->post("https://api.nft.storage/upload");

        return view('inceleme', compact("r"));
    }
}
