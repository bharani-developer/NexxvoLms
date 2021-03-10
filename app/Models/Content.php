<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
   protected $tabel = 'contents';
   protected $fillable = [
       'facebook',
       'twitter',
       'linkedin',
       'youtube',
       'instagram',
       'email',
       'phone_number',

   ];
}
