<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollmentInfo extends Model
{
    use HasFactory;

    public function studentData(){
        return $this->belongsTo(Student::class);
    }

}
