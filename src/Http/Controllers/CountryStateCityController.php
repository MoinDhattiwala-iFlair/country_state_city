<?php

namespace MoinDhattiwala\CountryStateCity\Http\Controllers;

use App\Http\Controllers\Controller;
use MoinDhattiwala\CountryStateCity\Models\Country;
use MoinDhattiwala\CountryStateCity\Models\State;

class CountryStateCityController extends Controller
{
    public function index()
    {
        return view('csc::csc_view');
    }

    public function country()
    {
        return Country::pluck('name', 'id');
    }

    public function state($id)
    {
        $country = Country::findOrFail($id);
        return $country->state->pluck('name', 'id');
    }

    public function city($id)
    {
        $state = State::findOrFail($id);
        return $state->city->pluck('name', 'id');
    }
}
