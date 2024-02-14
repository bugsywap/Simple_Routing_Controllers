<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    public function show($id){

        $about = array(
            "id" => $id,
            "name" => "Gabe",
            "age" => "23",
            "address" => "scout barrio"
        );
        return view  ('about_me', ['about' => $about]);
    }
}
