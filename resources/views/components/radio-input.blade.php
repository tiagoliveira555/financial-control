@props(['label', 'id'])

<div>
    <input class="cursor-pointer" type="radio" name="expense" id="{{ $id }}">
    <label class="text-gray-800" for="{{ $id }}">{{ $label }}</label>
</div>
