<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UnitKerjaController extends Controller
{
    public function unitkerjaView(){
        // $allData=User::all();
        $data['allData'] = User::all();
        return view ('backend.unitkerja.view_unitkerja', $data);
    }
    public function unitkerjaAdd(){
        return view ('backend.unitkerja.add_unitkerja');
    }

    public function unitkerjaStore(Request $request){
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
            'alert-type' => 'success'

        );

        return redirect()->route('unitkerja.view')->with($notification);
    }

    public function unitkerjaUpdate(Request $request, $id){

        $data = User::find($id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->pj = $request->pj;
        $data->email = $request->email;
        $data->save();

        $notification = array(
            'message' => 'Unit Kerja Berhasil Diubah',
            'alert-type ' => 'Info'

        );

        return redirect()->route('unitkerja.view')->with($notification);
    }

    public function unitkerjaEdit($id){
        $editData= User::find($id);
        return view('backend.unitkerja.edit_unitkerja', compact('editData'));
    }

    public function unitkerjaDelete($id){
        $user= User::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Unit Kerja Berhasil Dihapus',
            'alert-type ' => 'Info'

        );

        return redirect()->route('unitkerja.view')->with($notification);
    }
}
