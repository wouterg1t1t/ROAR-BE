<?php

namespace App\Models;

use App\Http\Controllers\AdressController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function addresses()
    {
        return $this->hasMany(Adress::class);
    }
}
