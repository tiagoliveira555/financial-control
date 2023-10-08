@props(['label' => null, 'data' => null])

<div class="flex flex-col">
    <label class="text-gray-800" for="{{ $data }}">{{ $label }}</label>
    <input wire:model="{{ $data }}" class="border" type="text" id="{{ $data }}" name="{{ $data }}">
    @error($data)
        <span class="text-red-400">{{ $message }}</span>
    @enderror
</div>
