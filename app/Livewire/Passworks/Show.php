<?php

namespace App\Livewire\Passworks;

use App\Livewire\Forms\PassworkForm;
use App\Models\Passwork;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public PassworkForm $form;

    public function mount(Passwork $passwork)
    {
        $this->form->setPassworkModel($passwork);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.passwork.show', ['passwork' => $this->form->passworkModel]);
    }
}
