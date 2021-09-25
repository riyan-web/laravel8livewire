<?php

namespace App\Http\Livewire;

use App\Models\Program;
use Livewire\Component;

class Konsultasi extends Component
{
    public function render()
    {
        $programs = Program::orderBy('id', 'DESC')->get();
        return view('livewire.konsultasi', [
            'programs' => $programs
        ]);
    }
}
