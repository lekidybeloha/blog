<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'category_id',
        'status',
        'user_id'
    ];

    public $appends = [
        'category_name'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(Administrator::class, 'user_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategoryNameAttribute()
    {
        return $this->category->name;
    }

    //This method is used to generate automatic slug for url
    protected static function booted()
    {
        static::created(function (Article $article){
            $article->slug = Str::slug($article->title).'-'.$article->id;
            $article->save();
        });
    }
}
