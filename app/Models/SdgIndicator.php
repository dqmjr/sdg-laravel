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
        'title_kk',
        'title_en',
        'status',
        'value',
        'unit',
        'unit_kk',
        'unit_en',
        'url',
        'url_kk',
        'url_en',
    ];

    /**
     * Связь: индикатор принадлежит одной цели
     */
    public function goal()
    {
        return $this->belongsTo(SdgGoal::class, 'goal_id');
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

	public function getLocalizedUnitAttribute()
	{
        $locale = app()->getLocale();
        $field = match ($locale) {
            'kk' => 'unit_kk',
            'en' => 'unit_en',
            default => 'unit',
        };

        return $this->$field ?? $this->unit;
	}

	public function getLocalizedTitleAttribute()
	{
        $locale = app()->getLocale();
        $field = match ($locale) {
            'kk' => 'unit_kk',
            'en' => 'unit_en',
            default => 'unit',
        };

        return $this->$field ?? $this->title;
	}
}
