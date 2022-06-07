<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelRoomText extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'hotel_room_id',
        'price'
    ];

    public function hotelRoom()
    {
        return $this->belongsTo(HotelRoom::class);
    }
}
