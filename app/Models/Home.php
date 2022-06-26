<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class Home extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = [
        'image',
        'video_url'
    ];

    public function banners()
    {
        return $this->hasMany(HomeBanner::class);
    }

    public function texts()
    {
        return $this->hasMany(HomeText::class);
    }

    public function getImageAttribute($value){
        return url($value);
        // return url('public/'.$value);
    }

    public function setVideoUrlAttribute($value){
        $attribute_name = "video_url";
        $disk = "public";
        $destination_path = "video";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $destination_path = "public/uploads";

        if ($value==null) {
            Storage::delete($this->{$attribute_name});
            $this->attributes[$attribute_name] = null;
        }

        if (Str::startsWith($value, 'data:image'))
        {
            $image = Image::make($value)->encode('png', 90);
            $filename = md5($value.time()).'.png';
            Storage::put($destination_path.'/'.$filename, $image->stream());
            $public_destination_path = Str::replaceFirst('public/', 'storage2/', $destination_path);
            $this->attributes[$attribute_name] = $public_destination_path.'/'.$filename;
        }
    }
}
