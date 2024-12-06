<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $table = 'answers';

    protected $fillable = [
        'question_id',
        'student_id',
        'choice_id',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function student()
    {
        return $this->belongsTo(Mahasiswa::class, 'student_id');
    }

    public function choice()
    {
        return $this->belongsTo(Choice::class);
    }
}