<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerKey extends Model
{
    use HasFactory;

    protected $table = 'answer_keys';

    protected $fillable = [
        'question_id',
        'correct_answer',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}