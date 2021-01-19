<?php

namespace MoinDhattiwala\CountryStateCity\Models;

use Illuminate\Database\Eloquent\Model;
use MoinDhattiwala\CountryStateCity\Models\City;
use MoinDhattiwala\CountryStateCity\Models\Country;

class State extends Model
{
    protected $guarded = [];

    public function city()
    {
        return $this->hasMany(City::class, 'state_id');
    }

    public function country()
    {
        return $this->belongTo(Country::class, 'country_id');
    }
}
