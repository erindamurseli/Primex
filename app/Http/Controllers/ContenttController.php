<?php

namespace App\Http\Controllers;

use App\Models\Content;


use Illuminate\Http\Request;

class ContenttController extends Controller
{
    public function index()
    {
        $contents= Content::all();

        return $contents;
    }

    public function show($id)
    {
    
        $contents = Content::find($id);
        $contents->get();

        return $contents;
    }

    public function update(Request $request, $id)
    {
        $contents = Content::find($id);
        
        $contents->update([
            'name' => $request->name,
            'content' => $request->content,
        ]);

        return $contents;
    }


    public function store(Request $request)
    {
        
        
        
        $content = Content::create([

           
            'name' => $request->name,
            //'card' => $request->card,
            'content' => $request->content,
         

        ]);

        return $content;
        //console.log(test);
    }

    public function destroy($id)
    {

        $content = Content::find($id);

        $content = Content::with('content')->where('id', $id)
                                            ->delete();

    }
}


    // public function show($id)
    // {
    //     $content = Comment::find($id);

    //     $content = Comment::with('title')
    //                     ->where('id',$id)
    //                     ->get();

    //     return $content;
    // }


