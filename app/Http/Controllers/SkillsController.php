<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){
        
        $skills = array(
            "Adobe Illustrator",
            "Figma",
            "Canva",
            "Adobe After Effects"
        );

        return view('skills', ['skills' => $skills]);
    }
}
