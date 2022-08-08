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
           'email' => 'required',
           'name' => 'required'
        ]);

        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->pj = $request->pj;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();

        $notification = array(
            'message' => 'Unit Kerja Berhasil Ditambahkan',
            'alert-type ' => 'Sukses'

        );

        return redirect()->route('unitkerja.view')->with($notification);
    }
}
