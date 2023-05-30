<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    protected $table = 'film';
    protected $fillable = ['title','synopsis','year	','poster','genre_id'];
    use HasFactory;
}
