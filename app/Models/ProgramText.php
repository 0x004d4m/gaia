<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgramText extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'language_id',
        'program_id',
        'name',
        'text'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
