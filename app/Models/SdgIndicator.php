<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SdgIndicator extends Model
{
    use HasFactory;

    protected $fillable = [
        'goal_id',
        'title',
        'status',
        'value',
        'unit',
        'url',
    ];

    /**
     * Связь: индикатор принадлежит одной цели
     */
    public function goal()
    {
        return $this->belongsTo(SdgGoal::class, 'goal_id');
    }
}
