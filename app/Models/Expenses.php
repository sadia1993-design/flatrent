<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;
    protected $fillable = ['expense_cateory_id', 'amount', 'note'];
    public function expense_category()
    {
        return $this->belongsTo(Expense_categoies::class);
    }
}
