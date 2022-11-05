<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class document extends Model
{
    use HasFactory;
    public function users()
    {
   //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
    return $this->belongsTo('App\user'
        // User::class,
        // 'documents_users',
        // 'doc_id',
        // 'user_id'
    );
    }
    // public function Documents_User(){
    //     return $this->belongsTo('App\Documents_User');
    // }
}


