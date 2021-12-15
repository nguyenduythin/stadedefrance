<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryNews extends Model
{
    use HasFactory;
    
    protected $table = 'galleries_new';
    public $fillable = ['url','new_id'];
}
