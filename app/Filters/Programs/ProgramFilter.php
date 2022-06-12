<?php

namespace App\Filters\Programs;

use App\Filters\AbstractFilter;

class ProgramFilter extends AbstractFilter
{
    protected $filters = [
        'name' => NameFilter::class,
        'price' => PriceFilter::class,
    ];
}
