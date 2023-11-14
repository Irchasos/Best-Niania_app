<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Guardian extends Model
{
    use HasFactory;

    final public function districts(): BelongsToMany
    {
        return $this->BelongsToMany(District::class, 'district_guardians', 'district_id', 'guardian_id');
    }

    final public function options(): BelongsToMany
    {
        return $this->BelongsToMany(Option::class, 'district_guardians', 'option_id', 'guardian_id');
    }
    final public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'guardian_users', 'user_id', 'guardian_id');
    }
}
