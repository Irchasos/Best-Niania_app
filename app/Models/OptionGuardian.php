<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionGuardian extends Model
{
    use HasFactory;
    protected $casts = [
        'guardian_id' => 'integer',
        'district_id' => 'integer',
    ];
}
