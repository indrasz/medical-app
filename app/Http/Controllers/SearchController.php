<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        $hospitals = Hospital::paginate(10);
        return view('pages.search', compact('hospitals'));
    }

    public function detail($slug){
        $hospital = Hospital::with(['category'])->where('slug', $slug)->firstOrFail();
        return view('pages.detail', compact('hospital'));
    }

    public function search(Request $request){
        $keyword = $request->keyword;

        $hospitals = Hospital::where('name', 'LIKE', "%$keyword%")->paginate(10);

        return view('pages.search', compact('hospitals'));
    }
}
