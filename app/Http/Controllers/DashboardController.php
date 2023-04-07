<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function view(){

    	$data=Document::all();
        return view ('admin.index', compact('data'));

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

        return redirect()->route('dashboard')->with($notification);
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

    public function delete($id){
        $document= Document::find($id);
        $document->delete();

        $notification = array(
            'message' => 'Document Berhasil Dihapus',
            'alert-type ' => 'Info'

        );

        return redirect()->route('dashboard')->with($notification);
    }

    public function preview(Document $document){
        $file_path = $document->file_path;
        $fileContents = Storage::get($file_path);
        // dd($file_path);
        return response($fileContents, 200, [
            'Content-Type' => Storage::mimeType($file_path),
            'Content-Disposition' => 'inline; filename="'.basename($file_path).'"'
        ]);
        // return view('preview', compact('file_path'));

    }


}
