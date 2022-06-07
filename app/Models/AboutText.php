<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutText extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'language_id',
        'about_id',
        'text'
    ];

    public function about()
    {
        return $this->belongsTo(About::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
