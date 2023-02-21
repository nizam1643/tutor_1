<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentialCollege extends Model
{
    use HasFactory;

    protected $table = 'residential_colleges';

    protected $fillable = [
        'name',
    ];
    
    public function studentAplications()
    {
        return $this->hasMany(StudentAplication::class, 'residential_college_id', 'id');
    }
}
