@props([
    'texto' => '',
    'valor' => '',
])
<div class="col-span-1 p-4 flex justify-between border-b border-teal-200">
    <span class= "text-teal-500 uppercase font-bold">{{ $texto }}:</span>
    <span class="w-1/2">{{ $valor }}</span>
</div>

