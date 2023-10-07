@props(['label'])

<div class="flex flex-col">
    <label class="text-gray-800" for="description">{{ $label }}</label>
    <input class="border" type="text" id="description" name="description">
</div>
