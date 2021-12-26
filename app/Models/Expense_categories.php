<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense_categories extends Model
{
    use HasFactory;
    protected $fillable = ['category'];
    public function expense()
    {
        return $this->hasMany(Expenses::class);
    }
}
