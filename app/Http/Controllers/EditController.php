<?php

namespace App\Http\Controllers;

use App\Models\Card;


use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index()
    {
        $cards= Card::all();

        return $cards;
    }

    public function show($id)
    {
    
        $cards = Card::find($id);
        $cards->get();

        return $cards;
    }

    public function update(Request $request, $id)
    {
        $cards = Card::find($id);
        
        $cards->update([
            'cardname' => $request->cardname,
            'cardcontent' => $request->cardcontent,
          
        ]);

        return $cards;
    }


    public function store(Request $request)
    {
        
        
        
        $card = Card::create([

           
            'cardname' => $request->cardname,
            'cardcontent' => $request->cardcontent,
          
         

        ]);

        return $card;
        //console.log(test);
    }

    public function destroy($id)
    {

        $card = Card::find($id);

        $card = Card::with('card')->where('id', $id)
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


