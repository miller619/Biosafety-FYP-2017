<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EDForm1 extends Model
{
    protected $fillable = [

        'Title', 'Project_summary', 'Possible_hazards', 'Building_No', 'Room_No', 'Containment_No', 'Certificate_No', 'Awareness', 'name_of_officer', 'name_lab_mngr', 'user_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    

    // public function e_d_form_b2s()
    // {
    // 	return $this->hasOne
    // }
}
