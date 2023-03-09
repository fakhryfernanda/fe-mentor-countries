<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CountryDetail extends Component
{
    public $countryIndex;
    public $country;

    public function mount($index)
    {
        $this->countryIndex = $index;
    }

    public function render()
    {
        $path = resource_path('data/data.json');
        $countries = json_decode(file_get_contents($path));
        $this->country = (array) $countries[$this->countryIndex];

        // dd($this->country);

        return view('livewire.country-detail');
    }
}
