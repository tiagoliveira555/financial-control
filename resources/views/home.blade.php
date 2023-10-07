<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle Financeiro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-200">
    <x-header>Controle Financeiro</x-header>
    <main class="max-w-6xl -mt-16 mx-auto">
        <div class="grid grid-cols-3 gap-x-4">
            <x-card-money label="Entradas" :icon="@svg('css-arrow-up-o')" money="1500,00" />
            <x-card-money label="Saídas" :icon="@svg('css-arrow-down-o')" money="380,00" />
            <x-card-money label="Total" :icon="@svg('css-dollar')" money="1120,00" />
        </div>

        <x-form>
            <x-input label="Descrição" />
            <x-input label="Valor" />
            <div class="flex gap-10">
                <x-radio-input label="Entrada" id="1" />
                <x-radio-input label="Saída" id="0" />
            </div>
            <x-button>Adicionar</x-button>
        </x-form>
        <table class="mt-8 bg-white w-full rounded shadow-sm shadow-gray-300">
            <thead class="border-b">
                <tr>
                    <th class="text-left py-4 px-10 w-20">Descrição</th>
                    <th class="py-4 w-20">Valor</th>
                    <th class="py-4 w-20">Tipo</th>
                    <th class="py-4 w-2"></th>
                </tr>
            </thead>
            <tbody>
                <x-tbody-items description="Salário" value="1500" :type="1"/>
                <x-tbody-items description="Salário" value="1500" :type="0"/>
                <x-tbody-items description="Salário" value="1500" :type="0"/>
                <x-tbody-items description="Salário" value="1500" :type="1"/>
                <x-tbody-items description="Salário" value="1500" :type="1"/>
                <x-tbody-items description="Salário" value="1500" :type="0"/>
                <x-tbody-items description="Salário" value="1500" :type="1"/>
                <x-tbody-items description="Salário" value="1500" :type="1"/>
            </tbody>
        </table>
    </main>
</body>
</html>
