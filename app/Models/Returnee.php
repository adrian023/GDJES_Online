<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Returnee extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    public function Student(): HasOne{
        return $this->hasOne(Student::class);
    }   
}
