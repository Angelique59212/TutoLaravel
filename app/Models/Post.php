<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * @var string[]
     * spécifier les champs remplissable
     */
    protected $fillable = [
        'title',
        'slug',
        'content'
    ];

    /**
     * @var array
     * Pour les champs non remplissable
     */
//    protected $guarded = [];
}
