<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExampleComponent extends Component
{
    public $message = 'Hello from Livewire!'; // Przykładowa zmienna

    public function render()
    {
        return view('livewire.example-component'); // Przypisanie widoku komponentu
    }
}
