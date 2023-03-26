<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    //This method is used to generate automatic slug for url
    protected static function booted()
    {
        static::created(function (Category $category){
            $category->slug = Str::slug($category->name);
            $category->save();
        });
    }
}
