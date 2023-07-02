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
    'technology',
    'admission_year',
    'current_semester',
    'clg_id',
    'roll_no',
    'reg_no',
    'student_name',
    'student_nid',
    'student_mobile',
    'student_gender',
    'father_name',
    'father_nid',
    'father_mobile',
    'mother_name',
    'mother_nid',
    'mother_mobile',
    'address_street',
    'address_postOffice',
    'address_upazila',
    'address_zila',
    'ssc_board',
    'ssc_group',
    'ssc_roll',
    'ssc_reg',
    'ssc_result',
    'hsc_board',
    'hsc_group',
    'hsc_roll',
    'hsc_reg',
    'hsc_result',
    'password',
    'student_email',
    'inserter_id'
];


    
}