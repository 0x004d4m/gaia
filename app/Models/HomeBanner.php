<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeBanner extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'language_id',
        'home_id',
        'text'
    ];

    public function home()
    {
        return $this->belongsTo(Home::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
