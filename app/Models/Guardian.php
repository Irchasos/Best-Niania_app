<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Guardian extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'id',

    ];
    final public function districts(): BelongsToMany
    {
        return $this->belongsToMany(District::class, 'district_guardians', 'guardian_id', 'district_id');
    }

    final public function options(): BelongsToMany
    {
        return $this->BelongsToMany(Option::class, 'guardian_options', 'guardian_id', 'option_id');
    }
    final public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'guardian_users', 'user_id', 'guardian_id');
    }
}
