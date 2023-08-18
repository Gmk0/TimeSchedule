<?php

namespace App\Livewire\Web;

use App\Models\Professeur;
use Livewire\Component;

use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.web-layout')]
class Home extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.web.home', ['professeurs' => Professeur::paginate(10)]);
    }
}