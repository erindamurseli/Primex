<?php

namespace App\Http\Controllers;

use App\Models\About;


use Illuminate\Http\Request;

class EditAboutController extends Controller
{
    public function index()
    {
        $abouts= About::all();

        return $abouts;
    }

    public function show($id)
    {
    
        $abouts = About::find($id);
        $abouts->get();

        return $abouts;
    }

    public function update(Request $request, $id)
    {
        $abouts = About::find($id);
        
        $abouts->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return $abouts;
    }


    public function store(Request $request)
    {
        
        
        
        $about = About::create([

           
            'title' => $request->title,
            'content' => $request->content,

        ]);

        return $about;
        //console.log(test);
    }

    public function destroy($id)
    {

        $about = About::find($id);

        $about = About::with('about')->where('id', $id)
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

