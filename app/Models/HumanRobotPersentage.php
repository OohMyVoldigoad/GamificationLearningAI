<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HumanRobotPercentage extends Model
{
    use HasFactory;

    protected $table = 'human_robot_percentage';

    protected $fillable = [
        'student_id',
        'quiz_id',
        'human_percentage',
        'robot_percentage',
    ];

    public function student()
    {
        return $this->belongsTo(Mahasiswa::class, 'student_id');
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}