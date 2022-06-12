<?php

namespace App\Models;

use App\Filters\Programs\ProgramFilter;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Session;

class Program extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'price'
    ];

    protected $appends = [
        'name','image'
    ];

    public function getNameAttribute($value) {
        return ProgramText::where('program_id',$this->attributes['id'])->where('language_id', Session::get('language_id')==null?1:Session::get('language_id'))->first()->name ?? $this->attributes['id'];
    }

    public function getImageAttribute($value) {
        return ProgramImage::where('program_id',$this->attributes['id'])->first()->image ?? '';
    }

    /* Filter */
    public function scopeFilter(Builder $builder, $request)
    {
        return (new ProgramFilter($request))->filter($builder);
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
