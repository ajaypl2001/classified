<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'CateName',
        'CateNameAmahric',
        'CateIcon',
        'CateImage',
        'CateDate',
        'CateModify',
        'CateStatus'
    ];
}
