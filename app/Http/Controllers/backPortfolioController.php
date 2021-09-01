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
        $project  = $id;
        $project->info = $rq->info;
        $project->email = $rq->email;
        $project->phone_number = $rq->phone_number;
        $project->save();
        return redirect(route('backPortfolio'));
    }


    public function destroy(Portfolio $id){
        $id->delete;
        return redirect()->back();
    }
    public function detroyAll(){
        Portfolio::truncate();
        return redirect()->back();
    }
}
