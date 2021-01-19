<?php

namespace MoinDhattiwala\CountryStateCity\Models;

use Illuminate\Database\Eloquent\Model;
use MoinDhattiwala\CountryStateCity\Models\State;

class Country extends Model
{
    protected $guarded = [];

    public function state()
    {
        return $this->hasMany(State::class, 'country_id');
    }
}
