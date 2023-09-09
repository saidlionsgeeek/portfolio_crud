<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = [
        'info',
        'skill1',
        'n1',
        'skill2',
        'n2',
        'skill3',
        'n3',
        'skill4',
        'n4',
        'skill5',
        'n5',
        'skill6',
        'n6',
    ];
}
