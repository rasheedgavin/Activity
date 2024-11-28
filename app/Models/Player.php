<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Player extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'username',
        'email',
        'password',
        'year_level',
        'student_id_number'
    ];

    public function section(): HasOne
    {
        return $this->hasOne(Section::class, 'player_id');
    }
}
