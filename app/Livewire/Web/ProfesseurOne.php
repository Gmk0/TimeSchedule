<?php

namespace App\Livewire\Web;

use App\Models\Professeur;
use Livewire\Component;

use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.web-layout')]
class ProfesseurOne extends Component
{
    public $professeur;
    public function mount($id)
    {


        $user = Professeur::where('id', $id)->exists();

        if (!$user) {

            return $this->redirect('/professeur');
        }

        $this->professeur = Professeur::find($id);
    }
    public function render()
    {
        return view('livewire.web.professeur-one');
    }
}