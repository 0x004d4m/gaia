<?php

namespace App\Filters\Programs;

class NameFilter
{
    public function filter($builder, $value)
    {
        return $builder->whereHas('texts',
            function($q) use( $value ){
                $q->where('name', 'LIKE', '%'.$value.'%');
            }
        );
    }
}
