<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_image',
        'property_name',
        'property_description',
        'category_id',
    ];

    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
