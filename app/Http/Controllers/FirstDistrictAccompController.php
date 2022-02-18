<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstDistrictAccompController extends Controller
{
    public function index(){
        return view('accomplishments.firstDistrict');
    }
}
