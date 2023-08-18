<?php

namespace App\Livewire\Admin;

use App\Models\Course;
use App\Models\Professeur;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin-layout')]
class DashboardAdmin extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard-admin', [
            'professeurs' => Professeur::all()->count(),

            'cours' => Course::all()->count(),

        ]);
    }
}