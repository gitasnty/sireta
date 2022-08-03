<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetunjukKerjaController extends Controller
{
    public function petunjukkerjaview(){
        return view ('backend.petunjukkerja.view_petunjukkerja');
    }
    public function petunjukkerjaadd(){
        return view ('backend.petunjukkerja.add_petunjukkerja');
    }
}
