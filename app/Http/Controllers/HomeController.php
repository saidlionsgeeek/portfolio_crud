<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
        $users = Home::all();
        $abouts = About::all();
        $skills = Skill::all();
        return view("home",compact("skills","users","abouts"));
    }
    
}
