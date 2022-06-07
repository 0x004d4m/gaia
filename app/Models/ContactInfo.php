<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = [
        'facebook',
        'snapchat',
        'instagram',
        'phone1',
        'phone2',
        'email',
        'POBox',
        'location',
    ];
}
