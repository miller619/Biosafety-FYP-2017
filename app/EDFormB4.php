<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EDFormB4 extends Model
{
    protected $fillable = [
        'one', 'two', 'three', 'four', 'five', 'ed_form_id',
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function e_d_form1s(){
    	return $this->belongsTo(EDForm1::class);
    }
}
