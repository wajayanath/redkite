<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function content()
    { 
    	return $this->belongsTo(Content::class);
    }
}
