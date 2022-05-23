<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpu extends Model
{
    use HasFactory;
    protected $table = "perpu";

    public function masterSkpd(){
        return $this->belongsTo('App\Models\MasterSkpd','pemerkasa', 'id');        
    }

}   
