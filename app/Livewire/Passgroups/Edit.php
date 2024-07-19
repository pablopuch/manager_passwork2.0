<?php

namespace App\Livewire\Passgroups;

use App\Livewire\Forms\PassgroupForm;
use App\Models\Passgroup;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public PassgroupForm $form;

    public function mount(Passgroup $passgroup)
    {
        $this->form->setPassgroupModel($passgroup);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('passgroups.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.passgroup.edit');
    }
}
