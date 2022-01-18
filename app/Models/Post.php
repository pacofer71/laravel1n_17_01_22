<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['titulo', 'resumen', 'contenido', 'category_id'];

    //indicamos que cada post pertenece a una unica categoria
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
