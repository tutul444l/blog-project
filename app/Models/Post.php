<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'meta_title',
        'description',
        'meta_description',
        'date',
        'image',
        'category_id',
        'category_name',
        'sub_category_id',
        'subcategory_name',
        'author_id',
    ];
    protected $dates = ['date'];
}
