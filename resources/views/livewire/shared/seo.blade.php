<?php
use function Livewire\Volt\{state};

state(['title', 'description', 'keywords']);
?>

<div>
    @section('title', $title)
    @section('description', $description)
    @section('keywords', $keywords)
</div>