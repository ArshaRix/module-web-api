<?php

namespace Modules\Post\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Post\Database\factories\PostFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'details', 'account_id'];
    
    protected static function newFactory(): PostFactory {
        return PostFactory::new();
    }
}
