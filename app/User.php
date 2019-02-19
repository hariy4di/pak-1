<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $primaryKey ="id";
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nama', 'email', 'password','address','credit','birth_place','birth_date','gender','photoUrl','pkPosition','unit','CardSerialNumber','gender','birth_place','birth_date','lastSKUrl'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function username()
    {
        return 'id';
    }

    public function units()
    {
        return $this->belongsTo('App\Unit');
    }

    public function pk_positions()
    {
        return $this->belongsTo('App\pkPosition');
    }
   
}
