<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $searchlivre;

    public function render()
    {
        return view('admin.listelivre');
    }
}
