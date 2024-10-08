<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory;

class Category extends Model
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

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'CateId', 'CateId');
    }
}
