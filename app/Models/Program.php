<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class Program extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'price'
    ];

    protected $appends = [
        'name'
    ];

    public function getNameAttribute($value) {
        return ProgramText::where('program_id',$this->attributes['id'])->where('language_id',1)->first()->name ?? $this->attributes['id'];
    }

    public function texts()
    {
        return $this->hasMany(ProgramText::class);
    }

    public function images()
    {
        return $this->hasMany(ProgramImage::class);
    }
}
