<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SdgGoal extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
    ];

    /**
     * Связь: цель имеет много индикаторов
     */
    public function indicators()
    {
        return $this->hasMany(SdgIndicator::class, 'goal_id');
    }
}
