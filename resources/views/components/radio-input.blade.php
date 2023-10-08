@props(['label', 'value'])

<div>
    <input wire:model="expense" class="cursor-pointer" type="radio" name="expense" id={{ $value }} value={{ $value }} />
    <label class="text-gray-800" for="{{ $value }}">{{ $label }}</label>
</div>
