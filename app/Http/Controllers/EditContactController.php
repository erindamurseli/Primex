<?php

namespace App\Http\Controllers;

use App\Models\Contact;


use Illuminate\Http\Request;

class EditContactController extends Controller
{
    public function index()
    {
        $contacts= Contact::all();

        return $contacts;
    }

    public function show($id)
    {
    
        $contacts = Contact::find($id);
        $contacts->get();

        return $contacts;
    }

    public function update(Request $request, $id)
    {
        $contacts = Contact::find($id);
        
        $contacts->update([
            'email' => $request->email,
            'address' => $request->address,
            'phonenumber' => $request->phonenumber,
            'internet' => $request->internet,
             'address2' => $request->address2,
        ]);

        return $contacts;
    }


    public function store(Request $request)
    {
        
        
        
        $contact = Contact::create([

            'email' => $request->email,
            'address' => $request->address,
            'phonenumber' => $request->phonenumber,
            'internet' => $request->internet,
            'address2' => $request->address2,
        ]);

        return $contact;
        //console.log(test);
    }

    public function destroy($id)
    {

        $contact = Contact::find($id);

        $contact = Contact::with('contact')->where('id', $id)
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

