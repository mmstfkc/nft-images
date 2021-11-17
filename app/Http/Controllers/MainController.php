<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function index()
    {
        $r = Http::withHeaders
        (['Authorization' => 'Bearer ' . env("Authorization")])
            ->get("https://api.nft.storage/?limit=10");
        $r = $r['value'];
        return view('index',compact('r'));
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
