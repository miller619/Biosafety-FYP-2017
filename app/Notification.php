<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'unit_code', 'unit_title', 'project_code', 'project_title', 'keeper_name', 'storage_location', 'approved', 'user_id', 'approved_at',
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function notification_type_a(){
    	return $this->hasMany(NotificationTypeA::class);
    }

    public function admin()
    {
        return $this->belongsToMany(Admin::class);
    }
}
