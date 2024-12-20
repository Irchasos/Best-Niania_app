<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function guardians() { return $this->belongsToMany(Guardian::class, 'guardian_options', 'option_id', 'guardian_id'); }
}