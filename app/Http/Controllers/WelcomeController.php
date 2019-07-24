<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function Index(){
//        return "Hello World";
//        return view('Welcome');

//        return [
//            'name'=> 'Mosiur Rahman',
//            'city'=> 'Dhaka',
//            'country'=> "Bangladesh"
//        ];

        $name = "Anowar Rahman";

//        return view('student.add-student', compact('name'));
//        return view('student.add-student')->with('name', $name);

//        return view('student.add-student', [
//            'name' => $name
//        ]);

        return view('front.home.home-content');
    }

    public function Support(){
        return view('front.support.support-content');
    }

    public function About(){
        return view('front.about.about-content');
    }

    public function BlogInfo(){

    }
}
