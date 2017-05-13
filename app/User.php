<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'userContact', 'userFax', 'userAddress', 'userInstitution', 'userDesignation', 'userInstitutionID', 'userFaculty',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function notification(){
        return $this->hasMany(Notification::class);
    }

    public function notification_type_a(){
        return $this->hasMany(NotificationTypeA::class);
    }

}
