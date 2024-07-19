<?php

namespace App\Livewire\Forms;

use App\Models\Passgroup;
use Livewire\Form;
use Illuminate\Support\Facades\Auth;

class PassgroupForm extends Form
{
    public ?Passgroup $passgroupModel;

    public $user_id = '';
    public $name = '';
    public $url_img = '';

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'url_img' => 'string',
        ];
    }

    public function setPassgroupModel(Passgroup $passgroupModel): void
    {
        $this->passgroupModel = $passgroupModel;

        $this->user_id = $this->passgroupModel->user_id;
        $this->name = $this->passgroupModel->name;
        $this->url_img = $this->passgroupModel->url_img;
    }

    public function store()
    {
        $validatedData = $this->validate();

        // Obtener el ID del usuario autenticado
        $userId = Auth::id();

        // Crear el nuevo grupo con el ID del usuario
        Passgroup::create([
            'user_id' => $userId,
            'name' => $validatedData['name'],
            'url_img' => $validatedData['url_img'],
        ]);

        // Restablecer el formulario
        $this->reset();
    }

    public function update(): void
    {
        $this->passgroupModel->update($this->validate());

        $this->reset();
    }
}
