<?php

namespace App\Livewire\Home;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class Homepage extends Component
{
    public function render()
    {
        return view('livewire.home.homepage');
    }
}