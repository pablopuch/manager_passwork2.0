<?php

namespace App\Livewire\Passworks;

use App\Livewire\Forms\PassworkForm;
use App\Models\Passwork;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public PassworkForm $form;

    public function mount(Passwork $passwork)
    {
        $this->form->setPassworkModel($passwork);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('passworks.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.passwork.create');
    }
}
