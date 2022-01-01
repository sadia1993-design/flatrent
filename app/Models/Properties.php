<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $fillable = ['name', 'address'];

    public function flats()
    {
        return $this->hasMany(Flats::class, 'property_id', 'id');
    }

    // local scope
    public function scopeTakeLessThenFifty($query)
    {
        return $query->where('id', '<=', 50);
    }
}
