<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LainLainController extends Controller
{
    public function lainlainstrukturorganisasi(){
        return view ('backend.lainlain.strukturorganisasi_lainlain');
    }
    public function lainlainsasaranmutu(){
        return view ('backend.lainlain.sasaranmutu_lainlain');
    }
    public function lainlainproker(){
        return view ('backend.lainlain.proker_lainlain');
    }
}
