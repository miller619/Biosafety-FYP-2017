<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EDFormB3 extends Model
{
   protected $fillable = [
							'name', 'current_qualification', 'department', 'p_address', 'tele', 'fax', 'email_address', 'ed_form_id',
							];

	public function e_d_form1s(){
    	return $this->belongsTo(EDForm1::class);
    }

    public function e_d_form_b2s(){
    	return $this->belongsTo(EDFormB2::class);
    }
}
