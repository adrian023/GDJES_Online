<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LearningInfo extends Model
{
    use HasFactory;

    protected $table = 'households';
    protected $primaryKey = 'id';

    public function student(): BelongsTo{
        return $this->belongsTo(Student::class);
    }
}
