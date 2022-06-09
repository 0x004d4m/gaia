<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class HomeBanner extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'home_id',
        'image'
    ];

    public function home()
    {
        return $this->belongsTo(Home::class);
    }

    public function getImageAttribute($value){
        return url($value);
        // return url('public/'.$value);
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $destination_path = "public/uploads/banner";

        if ($value==null) {
            Storage::delete($this->{$attribute_name});
            $this->attributes[$attribute_name] = null;
        }

        if (Str::startsWith($value, 'data:image'))
        {
            $image = Image::make($value)->encode('png', 90);
            $filename = md5($value.time()).'.png';
            Storage::put($destination_path.'/'.$filename, $image->stream());
            $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
            $this->attributes[$attribute_name] = $public_destination_path.'/'.$filename;
        }
    }
}
