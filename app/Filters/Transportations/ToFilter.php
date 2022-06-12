<?php

namespace App\Filters\Transportations;

class ToFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('to',$value);
    }
}
