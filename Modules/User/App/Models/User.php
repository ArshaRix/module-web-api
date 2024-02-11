<?php

namespace Modules\User\App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;

use Modules\User\Database\factories\UserFactory;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable {

    use HasFactory, HasRoles;

    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'password',
        'account_id',
        'verified',
        'status'
    ];

    protected $hidden = [
        'password', 
        'remember_token'
    ];

    // protected $casts = ['password' => 'hashed'];
    
    protected static function newFactory() : UserFactory {
        return UserFactory::new();
    }

    
    // hashing password
    public function setPasswordAttribute($password) {
        $this -> attributes['password'] = Hash::make($password);
    }


    // relations
    public function roles() {
        return $this -> belongsToMany(Role::class);
    }

    public function permissions() {
        return $this -> belongsToMany(Permission::class);
    }
    
    public function posts() {
        return $this -> hasMany(Post::class);
    }
}
