<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fact;
class backFactsController extends Controller
{
    public function index(){
        $facts = Fact::all();
        return view('backoffice.backPages.facts',compact('facts'));
    }
    
    public function show(Fact $id){
        $fact = $id;
        return view('backoffice.layouts.showFact',compact('fact'));
    }
    public function edit(Fact $id){
        $fact = $id;
        return view('backoffice.layouts.editFact',compact('fact'));
    }


    public function update(Fact $id, Request $rq){
                request()->validate([
            "span"=>["required","numeric"],
            "icon"=>["required","min:1","max:40"],
            "p_strong"=>["required","min:1","max:40"],
            "p"=>["required","min:1","max:40"],
        ]);
        $fact  = $id;
        $fact->span = $rq->span;
        $fact->icon = $rq->icon;
        $fact->p_strong = $rq->p_strong;
        $fact->p = $rq->p;
        $fact->save();
        return redirect(route('showFact',$fact->id));
    }


    public function destroy(Fact $id){
        $id->delete();
        return redirect(route('backFacts'));
    }


    public function detroyAll(){
        Fact::truncate();
        return redirect()->back();
    }
}
