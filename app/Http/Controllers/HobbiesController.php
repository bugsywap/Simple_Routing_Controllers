<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index(){

        $hobbies = array(
            "Dota",
            "Kumain",
            "Rides",
            "Coffee shops",
            "Graphic Design",
            "Video Editing"
        );
        return view  ('hobbies', ['hobbies' => $hobbies]);
    }
}
