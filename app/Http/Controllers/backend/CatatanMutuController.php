<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatatanMutuController extends Controller
{
    public function catatanmutuview(){
        return view ('backend.catatanmutu.view_catatanmutu');
    }
    public function catatanmutuadd(){
        return view ('backend.catatanmutu.add_catatanmutu');
    }
}
