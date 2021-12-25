<?php

namespace App\Models\ExpenseCategories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $fillable = ['name', 'address'];

    public function flats()
    {
        return $this->hasMany(Flats::class);
    }
}
