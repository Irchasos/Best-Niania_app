<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Guardian extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'id',
        'district'
    ];

    public function districts(): BelongsToMany
    {
        return $this->belongsToMany(District::class, 'district_guardians', 'guardian_id', 'district_id');
    }

    public function options()
    {
        return $this->belongsToMany(Option::class, 'guardian_options', 'guardian_id', 'option_id');
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_guardian', 'user_id', 'guardian_id');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}