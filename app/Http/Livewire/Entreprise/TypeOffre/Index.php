<?php

namespace App\Http\Livewire\Entreprise\TypeOffre;

use App\Models\TypeOffre;
use Livewire\Component;

class Index extends Component
{
    public $nom,$type_offre_id;
    public $typeOffres;

    protected function rules()
    {
        return [
            'nom' => 'required|string',
        ];
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
       $this->typeOffres = TypeOffre::all();
    }

    public function saveTypeOffre()
    {
        $validatedData = $this->validate();
        $typeOffre = new TypeOffre();
        if($this->type_offre_id)
        {
            $typeOffre = TypeOffre::find($this->type_offre_id);
        }
        $typeOffre->nom = $validatedData['nom'];
        $typeOffre->save();
        toastr()->success("Type Offre enregistrer avec success");
        return redirect('entreprise/type-offre');
    }

    public function editTypeOffre($id)
    {
        $typeOffre = TypeOffre::find($id);
        $this->type_offre_id = $typeOffre->id;
        $this->nom = $typeOffre->nom;
    }

    public function render()
    {
        return view('livewire.entreprise.type-offre.index');
    }
}
