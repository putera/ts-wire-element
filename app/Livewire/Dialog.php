<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class Dialog extends ModalComponent
{
    public $adate = '';
    public $atext = '';


    function mount()
    {
        $this->adate = date('Y-m-d');
    }


    function asubmit()
    {
        dd($this->adate, $this->atext);
    }

    public static function modalMaxWidth(): string
    {
        return '7xl';
    }

    public function render()
    {
        return view('livewire.dialog');
    }
}
