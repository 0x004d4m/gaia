<?php

namespace App\Models;

use App\Filters\Hotels\HotelFilter;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Session;

class Hotel extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'location_id',
        'url'
    ];

    protected $appends = [
        'name','image', 'text'
    ];

    public function getNameAttribute($value) {
        return HotelText::where('hotel_id',$this->attributes['id'])->where('language_id', Session::get('language_id')==null?1:Session::get('language_id'))->first()->name ?? $this->attributes['id'];
    }

    public function getTextAttribute($value) {
        return HotelText::where('hotel_id',$this->attributes['id'])->where('language_id', Session::get('language_id')==null?1:Session::get('language_id'))->first()->text ?? $this->attributes['id'];
    }

    public function getImageAttribute($value) {
        return HotelImage::where('hotel_id',$this->attributes['id'])->first()->image ?? '';
    }

    /* Filter */
    public function scopeFilter(Builder $builder, $request)
    {
        return (new HotelFilter($request))->filter($builder);
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
