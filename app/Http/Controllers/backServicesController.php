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
        $personne  = $id;
        $personne->info = $rq->info;
        $personne->email = $rq->email;
        $personne->phone_number = $rq->phone_number;
        $personne->save();
        return redirect(route('backServices'));
    }


    public function destroy(Service $id){
        $id->delete;
        return redirect()->back();
    }
    
    public function detroyAll(){
        Service::truncate();
        return redirect()->back();
    }   
}
