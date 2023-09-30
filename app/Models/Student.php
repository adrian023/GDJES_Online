<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'grade_level',
        'section',
        'email',
        'password',
        'lrn',
        'psa_number',
        'last_name',
        'first_name',
        'middle_name',
        'extension_name',
        'birth_date',
        'age',
        'gender',
        'is_indigenous',
        'indigenous_group',
        'kinagisnang_wika',
        'religion',
        'has_special_condition',
        'special_condition',
        'address',
        'barangay',
        'city',
        'father_last_name',
        'father_first_name',
        'father_middle_name',
        'father_cell_no',
        'mother_last_name',
        'mother_first_name',
        'mother_middle_name',
        'mother_cell_no',
        'guardian_last_name',
        'guardian_first_name',
        'guardian_middle_name',
        'guardian_cell_no',
        'is_4p',
        'household_id',
        'has_own_cellphone_and_tablet',
        'has_computer',
        'no_gadgets',
        'has_tv',
        'has_internet',
        'mobile_data_only',
        'distance_learning',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
    use HasFactory;

    public function enrollmentInfo(){
        return $this->belongsTo(EnrollmentInfo::class);
    }
}
