<?php

namespace App\Repositories;

use App\Models\Country;
use App\Models\State;
use App\Models\Lga;

class LocationRepoData
{
    public function getStates()
    {
        return State::all();
    }

    public function getAllStates()
    {
        return State::orderBy('name', 'asc')->get();
    }

    public function getAllCountries()
    {
        return Country::orderBy('name', 'asc')->get();
    }

    public function getLGAs($state_id)
    {
        return Lga::where('state_id', $state_id)->orderBy('name', 'asc')->get();
    }

}