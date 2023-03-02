<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function profileView(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.profile.view_profile', compact ('user'));
    }

}
