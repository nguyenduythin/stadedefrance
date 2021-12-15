<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    
    protected $table = 'settings';
    public $fillable = ['logo','phone','open_store','closed_store','email','slogan','about','author','address','display'];
}
