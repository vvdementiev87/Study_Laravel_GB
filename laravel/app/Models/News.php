<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class News extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'author',
        'status',
        'description',
        'source_id',
        'guid',
        'link',
        'pubDate',
        'image'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,'category_has_news','news_id','category_id', 'id', 'id' );
    }
}
