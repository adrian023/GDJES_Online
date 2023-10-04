<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';

    protected $attributes = [
        'lrnStatus' => '1',
        'isIndigenous' => '0',
        'needSpecialAssistance' => '0',
    ];

    protected $casts = [
        'lrnStatus' => 'boolean',
        'isIndigenous' => 'boolean',
        'needSpecialAssistance' => 'boolean',        
    ];

    public function household(): HasOne{
        return $this->hasOne(Household::class);
    }

    public function father(): HasOneThrough{
        return $this->hasOneThrough(Father::class, Relative::class);        
    }

    public function mother(): HasOneThrough{
        return $this->hasOneThrough(Mother::class, Relative::class);
    }

    public function guardian(): HasOneThrough{
        return $this->hasOneThrough(Guardian::class, Relative::class);
    }

    public function learningInfo(): HasOne{
        return $this->hasOne(Learning::class);
    }

    public function returnee(): BelongsTo{
        return $this->belongsTo(Returnee::class);
    }
}
        