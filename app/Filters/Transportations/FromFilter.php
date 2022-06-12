<?php

namespace App\Filters\Transportations;

class FromFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('from',$value);
    }
}
