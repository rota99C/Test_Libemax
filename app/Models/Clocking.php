<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clocking extends Model
{
    public function employee(){
        return $this->belongsTo('App\Models\Employee');
    }
}
