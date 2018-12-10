<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Esensi\Model\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','address',
    ];

     protected $rules = [
       'name'      => [ 'max:32', 'required'],
       'email'     => [ 'email', 'required'],
       'phone'     => ['required', 'regex:/^[0-9]([(])?[0-9]{3}([)])?[0-9]{7} $/'],
       'address'   => [ 'max:32', 'required'],    
     ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
     /**
     * checks if the user belongs to a particular group
     * @param string|array $role
     * @return bool
     */
    // public function role($role) {
    //     $role = (array)$role;
    //     return in_array($this->role, $role);
    // }

    public function roles(){
        return $this->belongsToMany('App\Role', 'users_roles', 'user_id', 'role_id');
    }
    public function hasRole($role){
        return in_array($role, array_pluck($this->roles->toArray(), 'name'));
    } 
    public function orders()
      {
        return $this->hasMany('App\Order');
      }
}
