<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerUpUsage extends Model
{
    use HasFactory;

    protected $table = 'power_up_usage';

    protected $fillable = [
        'student_id',
        'power_up_id',
        'quiz_id',
    ];

    public function student()
    {
        return $this->belongsTo(Mahasiswa::class, 'student_id');
    }

    public function powerUp()
    {
        return $this->belongsTo(PowerUp::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}