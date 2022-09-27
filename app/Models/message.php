<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;

    //Asignacion masiva, Para protejer id y el status
    protected $guarded = ['id', 'created_at', 'update_at'];
    
    // Relacion uno a mucho inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
