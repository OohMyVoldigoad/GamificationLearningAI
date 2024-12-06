<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerUp extends Model
{
    use HasFactory;

    protected $table = 'power_ups';

    protected $fillable = [
        'name',
        'description',
        'effect',
        'duration',
    ];
}