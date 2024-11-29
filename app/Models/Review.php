<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['guardian_id', 'user_id', 'content', 'work_date', 'review_date'];
    protected $dates = ['work_date', 'review_date'];
    public function guardian()
    {
        return $this->belongsTo(Guardian::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
