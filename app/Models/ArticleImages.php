<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleImages extends Model
{   protected $fillable = ['article_id', 'image_path', 'caption'];
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    use HasFactory;
}