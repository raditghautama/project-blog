<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'provinsi_id',
        'title',
        'category',
        'slug',
        'body',
        'cover',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'provinsi_id', 'id');
    }
}
