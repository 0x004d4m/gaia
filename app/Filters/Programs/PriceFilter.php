<?php

namespace App\Filters\Programs;

class PriceFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('price',$value);
    }
}
