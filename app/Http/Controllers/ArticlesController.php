<?php
namespace App\Http\Controllers;
use App\Models\Articles;
use Illuminate\Http\Request;
class ArticlesController extends Controller
{
    public function new_article(Request $request){
       
        return view('Pages.create');
    }   

    public function add_article(Request $request){
        $formFields = $request->validate([
        'title' => ['required', 'min:3'],
        'title' => ['required', 'min:3'],
        'tags' => [''],
        'article' => ['required'],
        'file' => [''],
        'confirm' => [''],
    ]);

    //assign user id to db from form field
    $formFields['user_id'] = auth()->id();
    Articles::create($formFields);
    return view('Pages.create')->with('message', 'Article created successfully!');
    }
}
