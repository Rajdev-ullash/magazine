<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'slug', 'category_id', 'short_description', 'details', 
        'main_image', 'thumbnail_image', 'writer', 'publish_date', 
        'status', 'show_home_page','features','user_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(ArticleImages::class);
    }
    use HasFactory;
    
}