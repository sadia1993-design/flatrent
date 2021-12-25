<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rents extends Model
{
    use HasFactory;
    protected $fillable = ['flat_id', 'tenant_id', 'rent_amount'];
    public function flat()
    {
        return $this->belongsTo(Flats::class);
    }
    public function tenant()
    {
        return $this->belongsTo(Tenants::class);
    }
}
