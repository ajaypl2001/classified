<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'CateId',
        'ScateName',
        'ScateNameAmharic',
        'ScateDate',
        'ScateModify',
        'ScateStatus'
    ];
    public function category()
    {
        return $this->belongsTo(Categorie::class, 'CateId');
    }

}
