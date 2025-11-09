<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Post;


class Tag extends Model
{
    use Hasfactory;

    //  kolom yang dapat diisi secara massal
    protected $fillable = ['name'];

    //  relasi many to many dengan post
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
