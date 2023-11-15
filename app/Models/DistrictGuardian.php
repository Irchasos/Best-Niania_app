<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrictGuardian extends Model
{
    use HasFactory;

    protected $table = 'district_guardians';

    protected $casts = [
        'guardian_id' => 'integer',
        'district_id' => 'integer',
    ];

    protected $foreignPivotKey = 'guardian_id';
    protected $relatedPivotKey = 'district_id';
}
