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

    public array $amounts = [];

    public function render()
    {
        return view('livewire.home', [
            $this->amounts = Amount::all()->toArray(),
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
        $amounts = 0;

        foreach ($this->amounts as $item) {
            if ($item['expense'] === 1) {
                $amounts += $item['amount'];
            }
        }

        return $amounts;
    }

    #[Computed]
    public function getExpense()
    {
        $expenses = 0;

        foreach ($this->amounts as $item) {
            if ($item['expense'] === 0) {
                $expenses += $item['amount'];
            }
        }

        return $expenses;
    }

    #[Computed]
    public function getTotal()
    {
        $amounts = 0;
        $expenses = 0;

        foreach ($this->amounts as $item) {
            if ($item['expense'] === 1) {
                $amounts += $item['amount'];
            } else {
                $expenses += $item['amount'];
            }
        }

        return $amounts - $expenses;
    }
}
