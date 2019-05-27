<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['headline', 'text', 'category', 'rank', 'img', 'free'];

}
