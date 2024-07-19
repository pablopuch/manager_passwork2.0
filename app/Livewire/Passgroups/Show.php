<?php

namespace App\Livewire\Passgroups;

use App\Livewire\Forms\PassgroupForm;
use App\Models\Passgroup;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public PassgroupForm $form;

    public function mount(Passgroup $passgroup)
    {
        $this->form->setPassgroupModel($passgroup);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.passgroup.show', ['passgroup' => $this->form->passgroupModel]);
    }
}
