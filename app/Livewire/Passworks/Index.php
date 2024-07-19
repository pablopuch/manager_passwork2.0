<?php

namespace App\Livewire\Passworks;

use App\Models\Passwork;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $passworks = Passwork::paginate();

        return view('livewire.passwork.index', compact('passworks'))
            ->with('i', $this->getPage() * $passworks->perPage());
    }

    public function delete(Passwork $passwork)
    {
        $passwork->delete();

        return $this->redirectRoute('passworks.index', navigate: true);
    }
}
