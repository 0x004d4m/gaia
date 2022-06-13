<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookedHotelRoom extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'hotel_room_id',
        'language_id',
        'price',
        'first_name',
        'last_name',
        'phone',
        'email',
        'date_of_birth',
        'number_of_people',
        'passport_number',
        'passport_issue_date',
        'passport_expiry_date',
        'nationality',
        'status',
        'hyperpay_create_payment',
        'hyperpay_check_payment',
    ];

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = ($value!=-1)?$value:HotelRoom::where('id',$this->attributes['hotel_room_id'])->first()->price;
    }

    public function hotelRoom()
    {
        return $this->belongsTo(HotelRoom::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
