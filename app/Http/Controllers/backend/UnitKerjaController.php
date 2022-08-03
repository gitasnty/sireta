<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UnitKerjaController extends Controller
{
    public function unitkerjaview(){
        // $allData=User::all();
        $data['allData'] = User::all();
        return view ('backend.unitkerja.view_unitkerja', $data);
    }
    public function unitkerjaadd(){
        return view ('backend.unitkerja.add_unitkerja');
    }

    public function unitkerjastore(Request $request){
        $validatedData = $request->validate([
           'email' => 'required|uniqe:users',
           'name' => 'required'
        ]);

        $data = new User();
    }
}
