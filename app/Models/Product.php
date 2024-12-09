<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CategoryController;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(CategoryController::class);
    }
}
