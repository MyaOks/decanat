<?php

namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class GroupToSubjects extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'subjects_to_groups';

    protected $fillable = [
        'group_name',
        'subject_id'
    ];
}