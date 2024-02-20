<?php

use App\Models\Menu;

use function Livewire\Volt\{state, mount};

state('links');

mount(function (Menu $menu) {
    $this->links = $menu::all();
});
?>

<nav class="container z-10 flex items-center justify-between p-6 mx-auto sm:top-0 sm:right-0 text-end" id="navigation">
    <a href="/"><x-application-logo class="w-20 h-20 text-gray-500 fill-current" /></a>

    <ul class="relative flex space-x-3">
        @foreach ($links as $link)
            <li><a class="inline-block p-4" href="{{ $link->route }}">{{ $link->name }}</a></li>
        @endforeach

        {{-- <livewire:shared.active-link-indicator /> --}}
    </ul>
</nav>
