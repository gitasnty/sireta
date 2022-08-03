<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManualMutuController extends Controller
{
    public function manualmutuview(){
        return view ('backend.manualmutu.view_manualmutu');
    }
    public function manualmutuadd(){
        return view ('backend.manualmutu.add_manualmutu');
    }
}
