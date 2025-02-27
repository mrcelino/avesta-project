<?php

namespace App\Livewire;

use Livewire\Component;

class CustomDropdown extends Component
{
    public $isOpen = false;
    public $selectedOption = null;

    public function toggleDropdown()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function selectOption($option)
    {
        $this->selectedOption = $option;
        $this->isOpen = false; // Tutup dropdown setelah memilih
    }

    public function render()
    {
        return view('livewire.custom-dropdown');
    }
}