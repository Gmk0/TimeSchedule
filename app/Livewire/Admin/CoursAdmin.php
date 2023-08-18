<?php

namespace App\Livewire\Admin;

use App\Models\Course;
use App\Models\coursesseur;
use App\Models\Professeur;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.admin-layout')]
class CoursAdmin extends Component
{
    use WithPagination;

    public $query = '';

    public $cours = ['intitule' => '', 'faculte' => '', 'promotion' => '', 'heures' => '', 'option' => '', 'professeur_id' => ''];
    public $show = false;
    public $update;



    public function save()
    {





        $this->validate([
            'cours.intitule' => 'required',
            'cours.faculte' => 'required',
            'cours.promotion' => 'required',
            'cours.heures' => 'required',

            'cours.professeur_id' => 'required',

        ]);


        try {

            Course::create([
                'intitule' => $this->cours['intitule'],
                'faculte' => $this->cours['faculte'],
                'promotion' =>
                $this->cours['promotion'],
                'heures' =>
                $this->cours['heures'],
                'option' =>
                $this->cours['option'],
                'professeur_id' => $this->cours['professeur_id'],
            ]);

            $this->reset('cours');

            $this->dispatch('close');
            $this->dispatch('success');
        } catch (\Exception $e) {

            $this->dispatch('error');
        }
        //coursesseur::create()
    }
    public function updateC()
    {





        $this->validate([
            'cours.intitule' => 'required',
            'cours.faculte' => 'required',
            'cours.promotion' => 'required',
            'cours.heures' => 'required',

            'cours.professeur_id' => 'required',

        ]);


        try {

            Course::find($this->cours['id'])->update([
                'intitule' => $this->cours['intitule'],
                'faculte' => $this->cours['faculte'],
                'promotion' =>
                $this->cours['promotion'],
                'heures' =>
                $this->cours['heures'],
                'option' =>
                $this->cours['option'],
                'professeur_id' => $this->cours['professeur_id'],
            ]);

            $this->reset('cours');
            $this->update = false;

            $this->dispatch('success');
        } catch (\Exception $e) {

            $this->dispatch('error');
        }
        //coursesseur::create()
    }


    public function deleteCours($id)
    {

        try {
            Course::find($id)->delete();

            $this->dispatch('success');
        } catch (\Exception $e) {
            $this->dispatch('error');
        }
    }
    public function showModal()
    {

        $this->dispatch('open-modal', 'add-user');
    }

    public function updatecours($id)
    {

        $this->cours = Course::find($id)->toArray();

        $this->update = true;

        $this->dispatch('open-modal', 'add-user');
    }

    public function render()
    {
        return view('livewire.admin.cours-admin', [
            'courses' => Course::where('intitule', 'like', '%' . trim($this->query) . '%')
                ->orWhere('promotion', 'like', '%' . trim($this->query) . '%')
                ->orWhere('faculte', 'like', '%' . trim($this->query) . '%')
                ->whereHas('Professeur', function ($q) {
                    $q->where('nom', 'like', '%' . trim($this->query) . '%');
                })
                ->paginate(12),
            'professeurs' => Professeur::all()
        ]);
    }
}