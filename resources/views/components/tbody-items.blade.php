@props([
    'description',
    'amount',
    'type',
    'idItem'
])

@php
$icon = $type === "1" ? @svg('css-arrow-up-o') : @svg('css-arrow-down-o');
@endphp

<tr>
    <td class="px-10 py-2">{{ $description }}</td>
    <td class="text-center py-2">R$ {{ number_format($amount, 2, ",", ".") }}</td>
    <td class="py-2 flex justify-center items-center">
        <span {{ $attributes->class([
                'cursor-pointer',
                'text-green-600' => $type,
                'text-red-600' => !$type,
                ])
            }}>
            {{ $icon }}
        </span>
    </td>
    <td class="text-center py-2">
        <span
            class="cursor-pointer hover:text-red-500 transition-all"
            wire:click="delete({{ $idItem }})"
        >
            @svg('css-trash')
        </span>
    </td>
</tr>
