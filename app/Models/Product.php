<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'category_id', 'img'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImageUrl() {
        return asset('public' . storage::url($this->img));
    }
}
