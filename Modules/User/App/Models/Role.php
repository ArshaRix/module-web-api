<?php

namespace Modules\User\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Database\factories\RoleFactory;

class Role extends Model {
    
    use HasFactory;

    protected $fillable = ['name'];
    
    protected static function newFactory(): RoleFactory {
        //return RoleFactory::new();
    }
}
