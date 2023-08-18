<?php

namespace App\Livewire\Admin;

use App\Models\Professeur;
use Livewire\Component;

use Livewire\Attributes\Layout;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

#[Layout('layouts.admin-layout')]
class ProfesseurAdmin extends Component
{
    use WithPagination;
    use WithFileUploads;
    // public $professeurs;
    public $show = false;
    public $update;
    public $prof = [
        'nom' => '',
        'prenom' => '',
        'postnom' => '',
        'fonction' => '',
        'description' => '',
    ];

    public $query = "";
    public $file = null;

    public function mount()
    {
    }


    public function save()
    {

        $this->validate([
            'prof.nom' => 'required',
            'prof.postnom' => 'required',
            'prof.prenom' => 'required',
            'prof.titre' => 'required',
            'prof.fonction' => 'required',
            'prof.description' => 'required',

        ]);



        try {
            $imageName = $this->file->getClientOriginalName();

            // Enregistrer l'image dans le dossier de destination avec le nom d'origine
            $this->file->storeAs('public/images', $imageName);

            // Réinitialiser la variable d'entrée pour l'image


            $data = [
                'nom' => $this->prof['nom'],
                'postnom' => $this->prof['postnom'],
                'prenom' =>
                $this->prof['prenom'],
                'titre' =>
                $this->prof['titre'],
                'fonction' =>
                $this->prof['fonction'],
                'description' => $this->prof['description'],
                'image' => $imageName,
            ];

            //dd($data);

            Professeur::create($data);

            $this->file = null;

            $this->reset('file');
            $this->reset('prof');

            $this->dispatch('close');
            $this->dispatch('success');
        } catch (\Exception $e) {
            $this->dispatch('error');
        }
        //Professeur::create()
    }


    public function deleteProf($id)
    {

        try {
            Professeur::find($id)->delete();

            $this->dispatch('success');
        } catch (\Exception $e) {
            $this->dispatch('error');
        }
    }
    public function updateP()
    {

        $this->validate([
            'prof.nom' => 'required',
            'prof.postnom' => 'required',
            'prof.prenom' => 'required',
            'prof.titre' => 'required',
            'prof.fonction' => 'required',
            'prof.description' => 'required',
            'file' => 'required',

        ]);

        try {

            $imageName = null;
            if ($this->file != null) {
                $imageName = $this->file->getClientOriginalName();

                // Enregistrer l'image dans le dossier de destination avec le nom d'origine
                $this->file->storeAs('public/images', $imageName);
            }



            // Réinitialiser la variable d'entrée pour l'image



            $data = [
                'nom' => $this->prof['nom'],
                'postnom' => $this->prof['postnom'],
                'prenom' =>
                $this->prof['prenom'],
                'titre' =>
                $this->prof['titre'],
                'fonction' =>
                $this->prof['fonction'],
                'description' => $this->prof['description'],
                'image' => $imageName ? $imageName : $this->prof['image'],
            ];

            //dd($data);

            Professeur::find($this->prof['id'])->update($data);



            $this->file = null;
            $this->update = false;



            $this->reset('file');
            $this->reset('prof');

            $this->dispatch('success');
            $this->dispatch('close');
        } catch (\Exception $e) {
            $this->dispatch('error');
        }
        //Professeur::create()
    }

    public function updateProf($id)
    {

        $this->prof = Professeur::find($id)->toArray();

        $this->update = true;

        $this->dispatch('open-modal', 'add-user');
    }

    public function showModal()
    {

        $this->dispatch('open-modal', 'add-user');
    }
    public function render()
    {
        return view('livewire.admin.professeur-admin', ['professeurs' => Professeur::where('nom', 'like', '%' . trim($this->query) . '%')
            ->orWhere('prenom', 'like', '%' . trim($this->query) . '%')
            ->orWhere('postnom', 'like', '%' . trim($this->query) . '%')
            ->whereHas('courses', function ($q) {
                $q->where('intitule', 'like', '%' . trim($this->query) . '%');
            })
            ->paginate(12)]);
    }
}