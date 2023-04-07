<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;



class ManualMutuController extends Controller
{
    public function view(){
        $data=Document::where('doctype', 'Manual Mutu')->get();
        return view ('backend.manualmutu.view_manualmutu', compact('data'));
    }
    public function add(){
        $data=User::all();
        // $data=User::where('usertype', 'user')->get();
        return view ('backend.manualmutu.add_manualmutu', compact('data'));
    }
    public function delete($id){
        $document= Document::find($id);
        $document->delete();

        $notification = array(
            'message' => 'Document Berhasil Dihapus',
            'alert-type ' => 'Info'

        );

        return redirect()->route('manualmutu.view')->with($notification);
    }

    public function upload(Request $request){

        $validator = Validator::make($request->all(),
        ['file_path' => 'required|mimes:pdf,doc,jpg']);
        if($validator->fails()){
            $error = $validator->errors()->all(':message');
            return redirect()->back()->with([
                'message' => 'Data tidak valid, error: '.implode(' ', $error),
                'alert-type' => 'info'
            ]);
        }

        $data = Document::find($request->id);

        $fileName = $request->file_path->hashName();
        if ($request->hasFile('file_path')){
            $request->file('file_path')->storeAs('upload/', $fileName);
        }
        $data->file_path = 'upload/'.$fileName;
        $data->save();

        $notification = array(
            'message' => 'Dokumen Berhasil Ditambahkan',
            'alert-type' => 'success'

        );

        return redirect()->route('manualmutu.view')->with($notification);
    }

    public function download(Document $document)
    {
        $ext = substr($document->file_path, -3);
        // dd($ext);
        $path = storage_path().DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.$document->file_path;

        $header = ['Content-Type: application/'.$ext];
        $filename = str_replace(' ', '_', $document->name).'.'.$ext;
        return response()->download($path, $filename, $header);
    }

    public function store(Request $request)
    {
        $data = new Document();
        $data -> doctype = "Manual Mutu";
        $data -> name = $request->name;
        $data -> code = $request->code;
        $data -> user_id = $request->unitKerja;
        $data -> standard = $request->standard;
        $data -> period = $request->period;
        $data -> save();


        $notification=array(
            'message' => 'Dokumen berhasil ditambahkan',
            'alert-type' => 'success'
        );

        return redirect()->route('manualmutu.view')->with($notification);

    }
}
