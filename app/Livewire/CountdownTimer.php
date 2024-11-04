<?php

namespace App\Livewire;

use Livewire\Component;

class CountdownTimer extends Component
{
    public $hours = 0;
    public $minutes = 20;
    public $seconds = 0;

    public function mount()
    {
        $this->dispatch('countdown');
    }

    public function decrementTime()
    {
        if ($this->seconds > 0) {
            $this->seconds--;
        } else {
            if ($this->minutes > 0) {
                $this->minutes--;
                $this->seconds = 59;
            } else {
                if ($this->hours > 0) {
                    $this->hours--;
                    $this->minutes = 59;
                    $this->seconds = 59;
                }
            }
        }

        if ($this->hours > 0 || $this->minutes > 0 || $this->seconds > 0) {
            $this->dispatch('countdown');
        }
    }

    public function render()
    {
        return view('livewire.countdown-timer');
    }
}