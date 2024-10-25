<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IdeaController extends Controller
{

    public function show(Idea $idea){
        return view('idea.show',[
            'idea' => $idea
        ]);
    }


    public function store(){

        request()->validate([
            'idea' => 'required|min:2|max:240'
        ]);

        $idea = Idea::create([
            'content' => request()->get('idea',''),
        ]);

        return redirect()->route('dashboard')->with('success','Idea created successfully!');
    }

    public function destroy($id)
{

    $idea = Idea::where('id', $id)->firstOrFail();


    $idea->delete();


    return redirect()->route('dashboard')->with('success', 'Idea deleted successfully!');
}
}
