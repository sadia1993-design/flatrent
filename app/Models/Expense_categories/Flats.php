<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flats extends Model
{
    use HasFactory;
    protected $fillable = ['property_id', 'flat_no', 'size', 'details'];
    public function property()
    {
        return $this->belongsTo(Properties::class);
    }
    // public function tenants()
    // {
    //     return $this->belongsToMany(Tenants::class, 'flats_tenants')->withPivot('rent_amount');
    // }
    public function rents()
    {
        return $this->hasMany(Rents::class);
    }
}
