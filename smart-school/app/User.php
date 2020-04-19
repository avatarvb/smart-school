<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function isAdmin()
    {
        foreach ($this->roles()->get() as $role) {
            if ($role->name == 'admin') {
                return true;
            }
        }
    }

    public function isUser()
    {
        foreach ($this->roles()->get() as $role) {
            if ($role->name == 'user') {
                return true;
            }
        }
    }


    public function isTeacher()
    {
        foreach ($this->roles()->get() as $role) {
            if ($role->name == 'teacher') {
                return true;
            }
        }
    }

    public function isParent()
    {
        foreach ($this->roles()->get() as $role) {
            if ($role->name == 'parent') {
                return true;
            }
        }
    }


    public function isChild()
    {
        foreach ($this->roles()->get() as $role) {
            if ($role->name == 'child') {
                return true;
            }
        }
    }
}
