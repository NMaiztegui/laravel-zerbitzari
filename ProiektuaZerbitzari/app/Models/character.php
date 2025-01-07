<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class character extends Model
{
    /** @use HasFactory<\Database\Factories\CharacterFactory> */
    use HasFactory;
    protected $fillable = [
        'actor',
        'name',
        'description',
        'house_id',
        ];

        public function house():BelongsTo{
            return $this->belongsTo(House::class);
        }
}
