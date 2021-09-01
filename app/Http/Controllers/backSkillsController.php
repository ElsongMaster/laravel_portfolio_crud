<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
class backSkillsController extends Controller
{
public function index(){
        $skills = Skill::all();
        $skillTab = new Skill();
        $count = $skillTab->count();
        return view('backoffice.backPages.skills',compact('skills','count'));
    }
    
    public function show(Skill $id){
        $skill = $id;
        return view('backoffice.layouts.showSkill',compact('skill'));
    }
    public function edit(Skill $id){
        $skill = $id;
        return view('backoffice.layouts.editSkill',compact('skill'));
    }


    public function update(Skill $id, Request $rq){
        $skill  = $id;
        $skill->tech = $rq->tech;
        $skill->val = $rq->val;

        $skill->save();
        return redirect(route('backSkills'));
    }


    public function destroy(Skill $id){
        $id->delete;
        return redirect()->back();
    }
    
    public function detroyAll(){
        Skill::truncate();
        return redirect()->back();
    }   
}
