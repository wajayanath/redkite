<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'user_id','title', 'body', 'cancertype_id','category_id', 'treatment_stage_id'
    ];

    public function user()
    { 
    	return $this->belongsTo(User::class);
    }

    public function cancertype()
    { 
    	return $this->belongsTo(Cancertype::class);
    }

    public function reviews()
    { 
        return $this->hasMany(Review::class);
    }

}
