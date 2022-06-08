<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drive extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'from',
        'to',
        'price',
    ];

    public function locationFrom()
    {
        return $this->belongsTo(Location::class,'from','id');
    }

    public function locationTo()
    {
        return $this->belongsTo(Location::class,'to','id');
    }
}
