<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // kolom yang dapat diisi secara massal
    protected $fillable = ['user_id', 'title', 'content'];

    // Relasi inverse one to many dengan user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // relasi many to many dengan tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
