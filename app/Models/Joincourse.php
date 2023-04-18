<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joincourse extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'category_id',
        'phone',
        'message',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
