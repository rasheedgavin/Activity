<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'section_name'
    ];

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'player_id'); 
    }
}
