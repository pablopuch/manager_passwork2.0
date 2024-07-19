<?php

namespace App\Livewire\Passgroups;

use App\Models\Passgroup;
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
        $passgroups = Passgroup::paginate();

        return view('livewire.passgroup.index', compact('passgroups'))
            ->with('i', $this->getPage() * $passgroups->perPage());
    }

    public function delete(Passgroup $passgroup)
    {
        $passgroup->delete();

        return $this->redirectRoute('passgroups.index', navigate: true);
    }
}
