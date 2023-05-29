<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "students";
    protected $primaryKey = "id";

    protected $fillable = [
        'user_id',
        'user_name',
        'gender',
        'technology',
        'admission_year',
        'current_semester',
        'clg_id',
        'roll_no',
        'mobile_number',
        'email',
        'inserter_id'
    ];

    
}