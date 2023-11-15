<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class District extends Model
{
    use HasFactory;

    final public function guardians(): BelongsToMany
    {
        return $this->belongsToMany(Guardian::class, 'district_guardians', 'district_id', 'guardian_id');
    }

}
