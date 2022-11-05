<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;

class CatatanMutuController extends Controller
{
    public function catatanmutuview(){
        // mengambil data documents_users
    	$data=Document::all();
        //return $documents;
        return view ('backend.catatanmutu.view_catatanmutu', compact('data'));

    }
    public function catatanmutuadd(){
        return view ('backend.catatanmutu.add_catatanmutu');
    }
}
