<?php

namespace App\Filters\Hotels;

use App\Filters\AbstractFilter;
use App\Filters\Programs\NameFilter;

class HotelFilter extends AbstractFilter
{
    protected $filters = [
        'name' => NameFilter::class,
        'location_id' => LocationIdFilter::class,
    ];
}
