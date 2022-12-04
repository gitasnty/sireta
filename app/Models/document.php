<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class document extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id'
    );
    }

    // public function Document()
    // {
    //     protected $fillable = [
    //         'code',
    //         'name',
    //         'doctype',
    //         'user_id',
    //     ];
    // }

    // public function Documents_User(){
    //     return $this->belongsTo('App\Documents_User');
    // }
}

// class Post extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'code',
//         'name',
//         'doctype',
//         'user_id',
//     ];
// }


