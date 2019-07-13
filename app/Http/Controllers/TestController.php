<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index(Request $request)
    {

        $data['id'] = $request->id;

        return view('hello',$data);



    }



}
