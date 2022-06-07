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

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
