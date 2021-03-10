<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    protected $fillable = [
        'page_name',
        'page_title',
        'meta_description',
        'meta_keyword',
    ];
    public function getData()
    {
        return static::orderBy('id','desc')->get();
    }
}
