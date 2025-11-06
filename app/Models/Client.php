<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'website',
    ];

    public function reviews()
    {
        return $this->hasMany(ClientReview::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
