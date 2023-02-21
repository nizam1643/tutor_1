<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAplication extends Model
{
    use HasFactory;

    protected $table = 'student_aplications';

    protected $fillable = [
        'user_id',
        'residential_college_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function residentialCollege()
    {
        return $this->belongsTo(ResidentialCollege::class, 'residential_college_id', 'id');
    }
}
