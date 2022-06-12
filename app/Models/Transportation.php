<?php

namespace App\Models;

use App\Filters\Transportations\TransportationFilter;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transportation extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'from',
        'to',
        'price',
    ];

    protected $appends = [
        'full_trip'
    ];

    public function getFullTripAttribute($value) {
        return 'From '.$this->locationFrom->name.' To '.$this->locationTo->name;
    }

    /* Filter */
    public function scopeFilter(Builder $builder, $request)
    {
        return (new TransportationFilter($request))->filter($builder);
    }

    public function locationFrom()
    {
        return $this->belongsTo(Location::class,'from','id');
    }

    public function locationTo()
    {
        return $this->belongsTo(Location::class,'to','id');
    }
}
