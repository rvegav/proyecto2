<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsToMany(Role::class, 'assigned_roles'); //nombre de la tabla pivot
    }

    public function hasRoles(array $roles)
    {
        foreach ($roles as $role) 
        {
            foreach ($this->roles as $userRole) 
            {
                if ($userRole->role === $role) //no se
                {
                    return true;
                }
            }   

        }
            return false;
    }
}








