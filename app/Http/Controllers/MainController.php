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
        $file_type = $request->file->getClientOriginalExtension();
        $r = Http::withHeaders
        (['Authorization' => 'Bearer ' . env("Authorization")])
            ->withBody($file, 'image/'.$file_type)
            ->post("https://api.nft.storage/upload");

        return view('inceleme', compact("r"));
    }
}
