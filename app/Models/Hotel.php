<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'location_id',
        'url'
    ];

    protected $appends = [
        'name'
    ];

    public function getNameAttribute($value) {
        return HotelText::where('hotel_id',$this->attributes['id'])->where('language_id',1)->first()->name ?? $this->attributes['id'];
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function texts()
    {
        return $this->hasMany(HotelText::class);
    }

    public function images()
    {
        return $this->hasMany(HotelImage::class);
    }

    public function rooms()
    {
        return $this->hasMany(HotelRoom::class);
    }
}
