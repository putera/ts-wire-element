<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{

    function modal()
    {
        // $this->openModal('dialog');
        $this->dispatch('openModal', component: 'dialog');
    }

    public function render()
    {
        return view('livewire.home');
    }
}
