<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "image",
        "image_cover",
        "skil_one",
        "skil_two",
        "skil_three",
        "skil_four",
        "twitter",
        "facebook",
        "instagram",
        "skype",
        "linekdin",
    ];
}
