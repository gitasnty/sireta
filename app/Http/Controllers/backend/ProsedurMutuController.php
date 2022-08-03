<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProsedurMutuController extends Controller
{
    public function prosedurmutuview(){
        return view ('backend.prosedurmutu.view_prosedurmutu');
    }
    public function prosedurmutuadd(){
        return view ('backend.prosedurmutu.add_prosedurmutu');
    }
}
