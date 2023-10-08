<?php

namespace App\Livewire;

use App\Models\Amount;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Home extends Component
{
    #[Rule(['required', 'min:3', 'max:50'])]
    public string $description = '';

    #[Rule(['required', 'numeric', 'between:1,999999'])]
    public string $amount = '';

    #[Rule(['required', 'boolean'])]
    public bool $expense = false;

    public function render()
    {
        return view('livewire.home', [
            'amounts' => Amount::query()->get(),
        ]);
    }

    public function save()
    {
        $this->validate();

        Amount::query()->create($this->validate());

        $this->reset();

        session()->flash('success', 'Dados inseridos com sucesso!');
    }

    public function delete($id)
    {
        Amount::query()->findOrFail($id)->delete();

        session()->flash('deleted', 'Dados deletado com sucesso!');
    }

    #[Computed]
    public function getAmount()
    {
        return Amount::query()
            ->where('expense', true)
            ->sum('amount');
    }

    #[Computed]
    public function getExpense()
    {
        return Amount::query()
            ->where('expense', false)
            ->sum('amount');
    }

    #[Computed]
    public function getTotal()
    {
        $amount = Amount::query()
            ->where('expense', true)
            ->sum('amount');

        $expense = Amount::query()
        ->where('expense', false)
        ->sum('amount');

        return $amount - $expense;
    }
}
