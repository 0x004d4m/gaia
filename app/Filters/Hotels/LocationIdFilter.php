<?php

namespace App\Filters\Hotels;

class LocationIdFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('location_id',$value);
    }
}
