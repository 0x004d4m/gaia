<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Session;

class HotelRoom extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'hotel_id',
        'price'
    ];

    protected $appends = [
        'name', 'name_en'
    ];

    public function getNameAttribute($value) {
        return HotelRoomText::where('hotel_room_id',$this->attributes['id'])->where('language_id', Session::get('language_id')==null?1:Session::get('language_id'))->first()->name ?? $this->attributes['id'];
    }

    public function getNameEnAttribute($value) {
        return HotelRoomText::where('hotel_room_id',$this->attributes['id'])->where('language_id',1)->first()->name ?? $this->attributes['id'];
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function texts()
    {
        return $this->hasMany(HotelRoomText::class);
    }
}
