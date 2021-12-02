<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';
    public $fillable = ['name','image','description','price','cate_pd_id'];

    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cate()
    {
        return $this->belongsTo(CategoryProduct::class, 'cate_pd_id');
    }
}
