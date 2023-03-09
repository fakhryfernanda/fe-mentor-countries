<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $countries;

    public function render()
    {
        $path = resource_path('data/data.json');
        $countries = json_decode(file_get_contents($path));
        $this->countries = $countries;

        // dd($this->countries[100]->capital);
        return view('livewire.home');
    }
}
