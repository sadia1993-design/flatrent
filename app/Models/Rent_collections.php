<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rent_collections extends Model
{
    use HasFactory;
    protected $fillable = ['rent_id', 'amount'];
    public function rent()
    {
        return $this->belongsTo(Rents::class);
    }
}
