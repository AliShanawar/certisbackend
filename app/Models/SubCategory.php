<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';
    protected $fillable = [
        'sub_categories_name',
        'AddCategory_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'AddCategory_id');
    }
}
