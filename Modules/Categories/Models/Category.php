<?php

namespace Modules\Categories\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Categories\Database\Factories\CategoryFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    
    protected static function newFactory()
    {
        return CategoryFactory::new();
    }
}
