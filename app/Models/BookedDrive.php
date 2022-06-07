<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookedDrive extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'drive_id',
        'language_id',
        'price',
        'first_name',
        'last_name',
        'date_of_birth',
        'number_of_people',
        'passport_number',
        'passport_issue_date',
        'passport_expiry_date',
        'nationality'
    ];

    public function drive()
    {
        return $this->belongsTo(Drive::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
