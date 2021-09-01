<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
class indexController extends Controller
{
    public function index(){
        $abouts = About::all();
        $contacts = Contact::all();
        $facts = Fact::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $skills = Skill::all();
        $skillTab = new Skill();
        $count = $skillTab->count();
        $tabDatas = [$abouts,$contacts,$facts,$portfolios,$services,$skills];
        return view('pages.index',compact('abouts','contacts','facts','portfolios','services','skills','count'));
    }
}
