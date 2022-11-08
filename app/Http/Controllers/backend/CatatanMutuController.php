<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class CatatanMutuController extends Controller
{
    public function view(){
        // mengambil data documents_users
    	$data=Document::where('doctype', 'Catatan Mutu')->get();
        // $user = Document::with('user_id')->whereRelation('documents','user_id',2)->first();
        // $user->documents->user->name; // get user name
        //return $documents;
        return view ('backend.catatanmutu.view_catatanmutu', compact('data'));

    }
    public function add(){
        return view ('backend.catatanmutu.add_catatanmutu');
    }
    public function upload(Request $request){

        $validator = Validator::make($request->all(),
        ['file_path' => 'required|mimes:pdf,doc']);
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

        return redirect()->route('catatanmutu.view')->with($notification);
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

}
