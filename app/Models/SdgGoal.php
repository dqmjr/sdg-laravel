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
        'title_kk',
        'title_en',
        'url',
        'url_kk',
        'url_en',
        'color',
    ];

    /**
     * Связь: цель имеет много индикаторов
     */
    public function indicators()
    {
        return $this->hasMany(SdgIndicator::class, 'goal_id');
    }

    public function getLocalizedUrlAttribute()
    {
        $locale = app()->getLocale();
        $field = match ($locale) {
            'kk' => 'url_kk',
            'en' => 'url_en',
            default => 'url',
        };

        return $this->$field ?? $this->url;
    }

    public function getLocalizedTitleAttribute()
    {
        $locale = app()->getLocale();
        $field = match ($locale) {
            'kk' => 'title_kk',
            'en' => 'title_en',
            default => 'title',
        };

        return $this->$field ?? $this->title;
    }
}
