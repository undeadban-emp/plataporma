<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondDistrictAccompController extends Controller
{
    public function index(){
        return view('accomplishments.secondDistrict');
    }
}
