<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class NotificationTypeA extends Model
{
    protected $fillable = [
       'material_type', 'item_name', 'risk_level', 'quantity', 'volume', 'notification_id',
    ];

    public function notification(){
    	return $this->belongsTo('App\Notification');
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
