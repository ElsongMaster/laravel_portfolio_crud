<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class backAboutController extends Controller
{
    public function index(){
        $abouts = About::all();
        return view('backoffice.backPages.about',compact('abouts'));
    }

    
    
    public function show(About $id){
        $personne  = $id;
        return view('backoffice.layouts.showAbout',compact('personne'));
    }
    public function edit(About $id){
        $personne  = $id;
        return view('backoffice.layouts.editAbout',compact('personne'));
    }

    public function update(About $id,Request $rq){
        request()->validate([
            "h3"=>["required","min:1","max:100"],
            "birthday"=>["required","min:1","max:100"],
            "phone"=>["required"],
            "city"=>["required"],
            "age"=>["required","numeric"],
            "email"=>["required"],
            "freelance"=>["required"],
            "p3"=>["required","min:1","max:400"],

    ]);
        $personne  = $id;
        $personne->h3 = $rq->h3;
        $personne->p2 = $rq->p2;
        $personne->img = $rq->img;
        $personne->birthday = $rq->birthday;
        $personne->website = $rq->website;
        $personne->phone = $rq->phone;
        $personne->city = $rq->city;
        $personne->age = $rq->age;
        $personne->degree = $rq->degree;
        $personne->email = $rq->email;
        $personne->freelance = $rq->freelance;
        $personne->p3 = $rq->p3;

        $personne->save();
        return redirect(route('showAbout',$personne->id));
    }






    public function destroy(About $id){
        $id->delete();
        return redirect()->back();
    }

}
