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
    <header class="bg-teal-600 text-white w-full h-40">
        <h1 class="text-4xl text-center pt-5 font-bold">Controle Financeiro</h1>
    </header>
    <main class="max-w-6xl -mt-16 mx-auto">
        <div class="grid grid-cols-3 gap-x-4">
            <div class="bg-white h-36 py-6 px-20 rounded shadow-sm shadow-gray-300 flex flex-col justify-between align-items-center">
                <div class="flex justify-between align-items-center">
                    <h2 class="text-xl opacity-80">Entradas</h2>
                    <span>I</span>
                </div>
                <p class="text-4xl font-medium text-center">R$ <span>1500,00</span></p>
            </div>
            <div class="bg-white h-36 py-6 px-20 rounded shadow-sm shadow-gray-300 flex flex-col justify-between align-items-center">
                <div class="flex justify-between align-items-center">
                    <h2 class="text-xl opacity-80">Saídas</h2>
                    <span>I</span>
                </div>
                <p class="text-4xl font-medium text-center">R$ <span>380,00</span></p>
            </div>
            <div class="bg-white h-36 py-6 px-20 rounded shadow-sm shadow-gray-300 flex flex-col justify-between align-items-center">
                <div class="flex justify-between align-items-center">
                    <h2 class="text-xl opacity-80">Total</h2>
                    <span>I</span>
                </div>
                <p class="text-4xl font-medium text-center">R$ <span>1120,00</span></p>
            </div>
        </div>

        <form class="bg-white w-full h-28 mt-8 rounded shadow-sm shadow-gray-300 flex items-center justify-around">
            <div class="flex flex-col">
                <label class="text-gray-800" for="description">Descrição</label>
                <input class="border" type="text" id="description" name="description">
            </div>
            <div class="flex flex-col">
                <label class="text-gray-800" for="value">Valor</label>
                <input class="border" type="number" name="value" id="value">
            </div>
            <div>
                <input class="cursor-pointer" type="radio" name="expense" id="1">
                <label for="1">Entrada</label>
                <input class="cursor-pointer ml-8" type="radio" name="expense" id="0">
                <label for="0">Saída</label>
            </div>
            <button class="bg-teal-600 text-white uppercase p-3 rounded" type="submit">Adicionar</button>
        </form>
    </main>
</body>
</html>
