<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SagaCategory extends Model
{
    /** @use HasFactory<\Database\Factories\SagaCategoryFactory> */
    use HasFactory;

    public function sagas(): HasMany
    {
        return $this->hasMany(Saga::class);
    }
}
