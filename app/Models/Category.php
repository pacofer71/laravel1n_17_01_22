<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['nombre', 'descripcion'];

    //indicamos al modelo category que cada categoria puede tener muchos posts
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
