<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryGallery extends Model
{
    use HasFactory;
    
    protected $table = 'categories_gallery';
    public $fillable = ['name'	,'image',	'description',	'date'	];
    
    public function gallery(){
        return $this->hasMany(gallery::class,'cate_gallery_id');
    }
}
