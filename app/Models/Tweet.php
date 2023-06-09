<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
