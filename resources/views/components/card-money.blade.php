@props([
    'label',
    'icon',
    'money'
])

<div class="bg-white h-36 py-6 px-20 rounded shadow-sm shadow-gray-300 flex flex-col justify-between align-items-center">
    <div class="flex justify-between align-items-center text-gray-800">
        <h2 class="text-x">{{ $label }}</h2>
        <span>{{ $icon }}</span>
    </div>
    <p class="text-4xl font-medium text-center">R$ <span>{{ $money }}</span></p>
</div>
