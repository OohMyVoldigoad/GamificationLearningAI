<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordAnswer extends Model
{
    use HasFactory;

    protected $table = 'record_answers';

    protected $fillable = [
        'student_id',
        'quiz_id',
        'time_taken',
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