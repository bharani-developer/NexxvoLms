<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $table = 'team_members';
    protected $fillable = [
        'name',
        'designation',
        'order',
        'linkedin',
        'description',
        'image',



    ];
    public function getData()
    {
        return static::orderBy('id','desc')->get();
    }
}
