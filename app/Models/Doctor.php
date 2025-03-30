<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'address',
        'date_of_birth',
        'years_of_experinces',
        'number_of_licence',
        'major_id',

    ];
    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
