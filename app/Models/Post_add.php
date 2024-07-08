<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_add extends Model
{
    use HasFactory;
    public function images(){
        return $this->belongsTo(Image::class, "id", "postadd_id");
    }
}
