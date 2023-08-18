<?php

namespace App\Livewire\Web;

use App\Models\Professeur;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.web-layout')]

class ProfesseurList extends Component
{

    use WithPagination;

    public $query = '';


    protected $queryString = [

        'query',
    ];

    public function render()
    {
        return view('livewire.web.professeur-list', [
            'professeurs' => Professeur::where('nom', 'like', '%' . trim($this->query) . '%')
                ->orWhere('prenom', 'like', '%' . trim($this->query) . '%')
                ->orWhere('postnom', 'like', '%' . trim($this->query) . '%')
                ->whereHas('courses', function ($q) {
                    $q->where('intitule', 'like', '%' . trim($this->query) . '%');
                })
                ->paginate(12),
        ]);
    }
}