<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\About;

class AboutComponent extends Component
{
    public function render()
    {
        $about = About::where('id', 1)->first();
        return view('livewire.about-component', ['about'=> $about])->layout('layouts.base');
    }
}
