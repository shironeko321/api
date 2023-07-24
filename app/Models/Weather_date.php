<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Weather_date extends Model
{
    use HasFactory;

    protected $table = "tgl_cuaca";

    public function cuaca(): HasMany
    {
        return $this->hasMany(Weather::class, "tgl_cuaca_id");
    }
}
