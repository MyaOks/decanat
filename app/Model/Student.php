<?php

namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'students';

    protected $fillable = [
        'last_name',
        'first_name',
        'patronumic',
        'gender',
        'date_of_birth',
        'address',
        'group_name'
    ];
}