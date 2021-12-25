<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenants extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'phone', 'email', 'nid'];
    public function rents()
    {
        return $this->hasMany(Rents::class);
    }
}
