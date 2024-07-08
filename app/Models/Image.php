<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function Postadd(){
        return $this->hasOne(Post_add::class, "id", "postadd_id");
    }
}
