<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = "candidate";
    protected $fillable = [
        'name',
        'company',
        'phone',
        'email',
    ];

    use HasFactory;
}
