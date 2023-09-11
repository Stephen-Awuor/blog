<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function new_article(Request $request){
       
        return view('Pages.create')->with('message', 'Article successfully created');
    }   

    public function add_article(Request $request){
        $formFields = $request->validate([
        'title' => ['required', 'min:3'],
        'tags' => [''],
        'article' => ['required', 'min:300'],
        'file' => [''],
        'confirm' => [''],
    ]);
    Articles::create($formFields);
        return redirect('/')->with('message', 'Article created successfully!');
    }
}
