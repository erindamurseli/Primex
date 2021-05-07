<?php

namespace App\Http\Controllers;

use App\Models\Cardd;


use Illuminate\Http\Request;

class EditCarddController extends Controller
{
    public function index()
    {
        $cardds= Cardd::all();

        return $cardds;
    }

    public function show($id)
    {
    
        $cardds = Cardd::find($id);
        $cardds->get();

        return $cardds;
    }

    public function update(Request $request, $id)
    {
        $cardds = Cardd::find($id);
        
        $cardds->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return $cardds;
    }


    public function store(Request $request)
    {
        
        
        
        $cardd = Cardd::create([

           
            'title' => $request->title,
            'content' => $request->content,

        ]);

        return $cardd;
        //console.log(test);
    }

    public function destroy($id)
    {

        $cardd = Cardd::find($id);

        $cardd = Cardd::with('cardd')->where('id', $id)
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

