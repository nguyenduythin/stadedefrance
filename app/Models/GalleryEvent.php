<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryEvent extends Model
{
    use HasFactory;
    
    protected $table = 'galleries_event';
    public $fillable = ['url','event_id'];
}
