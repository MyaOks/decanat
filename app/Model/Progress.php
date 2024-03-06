<?php

namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'progress';

    protected $fillable = [
        'student_id',
        'subject_id',
        'hours',
        'assessment_type',
        'mark',
    ];
}