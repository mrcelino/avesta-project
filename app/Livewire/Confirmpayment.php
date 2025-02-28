<?php

namespace App\Livewire;

use Livewire\Component;

class Confirmpayment extends Component
{
    public $pin = '';
    public $showSuccessModal = false;
    public $showErrorModal = false;

    public function verifyPin()
    {
        if ($this->pin === '12345678') {
            $this->showSuccessModal = true;
        } else {
            $this->showErrorModal = true;
        }
    }

    public function cancel()
    {
        $this->pin = '';
    }

    public function render()
    {
        return view('confirmpayment');
    }
}