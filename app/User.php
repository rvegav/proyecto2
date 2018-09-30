<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class, 'assigned_roles'); //nombre de la tabla pivot
    // }
    public function role(){
        return $this->belongsTo(Role::Class);
    }

    // public function hasRoles(array $roles)
    // {
    //     foreach ($roles as $role) 
    //     {
    //         foreach ($this->roles as $userRole) 
    //         {
    //             if ($userRole->role === $role) //no se
    //             {
    //                 return true;
    //             }
    //         }   

    //     }
    //         return false;
    // }
    public function hasPermits(array $permisos){
        // dd($this->role->role_permits);
        $permitsUser = explode(',' , $this->role->role_permits);
        foreach ($permisos as $permiso ) {
            if (in_array($permiso, $permitsUser)) {
                  return true;
            }  
        }
        return false;
    }

        /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

}








