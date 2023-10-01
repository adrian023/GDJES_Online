<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function postEnrollment(Request $request){

        $request->validate([

        ]);
        return dd($request->all());
    }

    public function getEnrollment1(Request $request){
        $enrollmentData = $request->session()->get('enrollment');

        return view('enrollment1', compact('enrollment'));
    }   


    public function postEnrollment1(Request $request){

    }
}
