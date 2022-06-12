<?php

namespace App\Filters\Transportations;

use App\Filters\AbstractFilter;

class TransportationFilter extends AbstractFilter
{
    protected $filters = [
        'from' => FromFilter::class,
        'to' => ToFilter::class,
    ];
}
