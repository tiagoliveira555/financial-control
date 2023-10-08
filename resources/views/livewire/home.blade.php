<div>
    <x-header>Controle Financeiro</x-header>

    <main class="max-w-6xl -mt-16 mx-auto">

        <div class="grid grid-cols-3 gap-x-4">
            <x-card-money label="Entradas" :icon="@svg('css-arrow-up-o')" money="{{ $this->getAmount }}" />
            <x-card-money label="Saídas" :icon="@svg('css-arrow-down-o')" money="{{ $this->getExpense }}" />
            <x-card-money label="Total" :icon="@svg('css-dollar')" money="{{ $this->getTotal }}" />
        </div>

        <x-form>
            <x-input data="description" label="Descrição" />
            <x-input data="amount" label="Valor" />
            <div class="flex gap-10">
                <x-radio-input label="Entrada" value="1" />
                <x-radio-input label="Saída" value="0" />
            </div>
            <x-button>Adicionar</x-button>
        </x-form>
        @if (session('success'))
            <span class="inline-block text-green-600 w-full mx-auto text-center mt-3">{{ session('success') }}</span>
        @endif
        @if (session('deleted'))
            <span class="inline-block text-red-500 w-full mx-auto text-center mt-3">{{ session('deleted') }}</span>
        @endif
        <table class="mt-8 bg-white w-full rounded shadow-sm shadow-gray-300">
            <x-theader />
            <tbody>
                @foreach ($amounts as $item)
                    <x-tbody-items
                        wire:key="{{ $item['id'] }}"
                        description="{{ $item['description'] }}"
                        amount="{{ $item['amount'] }}"
                        type="{{ $item['expense'] }}"
                        idItem="{{ $item['id'] }}"
                    />
                @endforeach
            </tbody>
        </table>
    </main>
</div>
