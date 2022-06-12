<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class About extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = [
        'image',
        'image2',
    ];

    public function texts()
    {
        return $this->hasMany(AboutText::class);
    }

    public function getImageAttribute($value){
        return url($value);
        // return url('public/'.$value);
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $destination_path = "public/uploads/about";

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

    public function getImage2Attribute($value){
        return url($value);
        // return url('public/'.$value);
    }

    public function setImage2Attribute($value)
    {
        $attribute_name = "image2";
        $destination_path = "public/uploads/about";

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
