<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    
    protected $table = 'news';
    public $fillable = ['title'	,'galleries_new_id',	'image'	,'content'	,'viewer'];
}
