<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
class backPortfolioController extends Controller
{
 public function index(){
        $portfolios = Portfolio::all();
        return view('backoffice.backPages.portfolio',compact('portfolios'));
    }
    
    
    
    public function show(Portfolio $id){
        $project = $id;
        return view('backoffice.layouts.showPortfolio',compact('project'));
    }
    
    public function edit(Portfolio $id){
        $project = $id;
        return view('backoffice.layouts.editPortfolio',compact('project'));
    }
    public function update(Portfolio $id, Request $rq){
        request()->validate([
            "img"=>["required","min:1","max:200"],
        ]);
        $project  = $id;
        $project->img = $rq->img;
        $project->save();
        return redirect(route('showPortfolio',$project->id));
    }


    public function destroy(Portfolio $id){
        $id->delete();
        return redirect(route('backPortfolio'));
    }
    public function detroyAll(){
        Portfolio::truncate();
        return redirect()->back();
    }
}
