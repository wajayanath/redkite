<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancertype extends Model
{
    public function contents()
    {
    	return $this->hasMany(Content::class);
    }
}
