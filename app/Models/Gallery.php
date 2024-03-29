<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    
    protected $table = 'galleries';
    public $fillable = ['url','cate_gallery_id'];
    public function cate()
    {
        return $this->belongsTo(CategoryGallery::class, 'cate_gallery_id');
    }
}
