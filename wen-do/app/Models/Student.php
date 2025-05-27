<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    protected $fillable = ['name', 'student_number'];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}