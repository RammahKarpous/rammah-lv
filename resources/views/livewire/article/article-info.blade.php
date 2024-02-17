<?php
use function Livewire\Volt\{state};

state(['publish_date', 'category', 'mb']);

?>

<div class="flex items-center gap-3 mb-{{ $mb }}">
    <span class="text-gray-500">{{ \Carbon\Carbon::parse($publish_date)->format('j F Y') }}</span>
    <span class="inline-block w-1 h-1 bg-white rounded-full"></span>
    <span class="px-4 py-1 border rounded-full border-border">{{ $category }}</span>
</div>