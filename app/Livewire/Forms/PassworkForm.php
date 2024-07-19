<?php

namespace App\Livewire\Forms;

use App\Models\Passwork;
use Livewire\Form;

class PassworkForm extends Form
{
    public ?Passwork $passworkModel;

    public $passgroup_id = '';
    public $user_id = '';
    public $name = '';
    public $user_pass = '';
    public $email_pass = '';
    public $password_pass = '';
    public $link = '';
    public $note = '';
    public $url_img = '';
    public $favourite = '';

    public function rules(): array
    {
        return [
            'passgroup_id' => 'nullable|integer',
            'user_id' => 'required',
            'name' => 'required|string',
            'user_pass' => 'required|string',
            'email_pass' => 'nullable|string',
            'password_pass' => 'required|string',
            'link' => 'nullable|string',
            'note' => 'nullable|string',
            'url_img' => 'nullable|string',
        ];
    }

    public function setPassworkModel(Passwork $passworkModel): void
    {
        $this->passworkModel = $passworkModel;

        $this->passgroup_id = $this->passworkModel->passgroup_id;
        $this->user_id = $this->passworkModel->user_id;
        $this->name = $this->passworkModel->name;
        $this->user_pass = $this->passworkModel->user_pass;
        $this->email_pass = $this->passworkModel->email_pass;
        $this->password_pass = $this->passworkModel->password_pass;
        $this->link = $this->passworkModel->link;
        $this->note = $this->passworkModel->note;
        $this->url_img = $this->passworkModel->url_img;
        $this->favourite = $this->passworkModel->favourite;
    }

    public function store(): void
    {
        $validatedData = $this->validate();

        // Si passgroup_id es una cadena vacía, lo convertimos a null
        $validatedData['passgroup_id'] = $validatedData['passgroup_id'] === '' ? null : $validatedData['passgroup_id'];

        Passwork::create($validatedData);
        $this->reset();
    }

    public function update(): void
    {
        $validatedData = $this->validate();

        // Si passgroup_id es una cadena vacía, lo convertimos a null
        $validatedData['passgroup_id'] = $validatedData['passgroup_id'] === '' ? null : $validatedData['passgroup_id'];

        if ($this->passworkModel) {
            $this->passworkModel->update($validatedData);
        }

        $this->reset();
    }
}
