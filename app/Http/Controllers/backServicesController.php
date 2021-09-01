<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class backServicesController extends Controller
{
 public function index(){
        $services = Service::all();
        return view('backoffice.backPages.services',compact('services'));
    }

    public function show(Service $id){
        $service = $id;
        return view('backoffice.layouts.showService',compact('service'));
    }
    
    public function edit(Service $id){
        $service = $id;
        return view('backoffice.layouts.editServiceS',compact('service'));
    }


    public function update(Service $id, Request $rq){
                request()->validate([
            "title"=>["required","min:1","max:100"],
            "description"=>["required","min:1","max:200"],
        ]);
        $service  = $id;
        $service->title = $rq->title;
        $service->description = $rq->description;
        $service->save();
        return redirect(route('showService',$service->id));
    }


    public function destroy(Service $id){
        $id->delete();
        return redirect(route('backServices'));
    }
    
    public function detroyAll(){
        Service::truncate();
        return redirect()->back();
    }   
}
