<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelText extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'language_id',
        'hotel_id',
        'name',
        'text',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
