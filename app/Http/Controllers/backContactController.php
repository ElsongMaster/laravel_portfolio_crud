<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class backContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('backoffice.backPages.contact',compact('contacts'));
    }

    
    public function show(Contact $id){
        $contact = $id;
        return view('backoffice.layouts.showContact',compact('contact'));
    }
    public function edit(Contact $id){
        $contact = $id;
        return view('backoffice.layouts.editContact',compact('contact'));
    }

    public function update(Contact $id, Request $rq){
                        request()->validate([
            "info"=>["required","min:1","max:100"],
            "email"=>["required"],
            "phone_number"=>["required"],
        ]);
            $contact  = $id;
        $contact->info = $rq->info;
        $contact->email = $rq->email;
        $contact->phone_number = $rq->phone_number;
        $contact->save();
        return redirect(route('showContact', $contact->id));
    }


    public function destroy(Contact $id){
        $id->delete();
        return redirect(route('backContact'));
    }
    public function detroyAll(){
        Contact::truncate();
        return redirect()->back();
    }
}
