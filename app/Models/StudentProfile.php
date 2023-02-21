<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    use HasFactory;

    protected $table = 'student_profiles';

    protected $fillable = [
        'user_id',
        'phone_number',
        'address',
        'date_of_birth',
        'gender',
        'nationality',
        'education_level',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
