<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
        protected $table = 'social_medias'; // ganti sesuai tabel yang diinginkan

    use HasFactory;

    protected $fillable = [
        'platform',
        'url',
        'icon_class',
    ];
}
