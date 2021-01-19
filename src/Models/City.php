<?php

namespace MoinDhattiwala\CountryStateCity\Models;

use Illuminate\Database\Eloquent\Model;
use MoinDhattiwala\CountryStateCity\Models\State;

class City extends Model
{
    protected $guarded = [];

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}
