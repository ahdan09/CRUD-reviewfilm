<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'profile';
    protected $fillable = [
        'user_id',
        'age',
        'bio',
        'address',
    ];

    /**
     * Get the user associated with the profile.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
