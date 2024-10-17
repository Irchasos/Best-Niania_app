<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function guardians()
    {
        return $this->belongsToMany(Guardian::class, 'option_guardian', 'option_id', 'guardian_id');
    }
}
