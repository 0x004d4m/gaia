<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookedProgram extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'program_id',
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

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = ($value!=-1)?$value:Program::where('id',$this->attributes['program_id'])->first()->price;
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
