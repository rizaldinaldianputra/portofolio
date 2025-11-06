<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'technologies',
        'link',
        'client_id',
        'platform' // optional relasi ke client
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
