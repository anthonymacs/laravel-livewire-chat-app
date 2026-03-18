<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Profile')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.profile.index');
    }
}