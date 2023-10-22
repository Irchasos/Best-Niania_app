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
        return $this->BelongsToMany(Guardian::class, 'district_guardian', 'district_id', 'guardian_id');
    }

}
