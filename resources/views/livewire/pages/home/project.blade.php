<?php
use function Livewire\Volt\{state};
state(["isComingSoon", "project"]);
?>

<section class="flex items-start justify-between w-11/12 px-16 py-10 mx-12 border cursor-default xl:flex-start xl:items-start xl:w-full max-lg:items-center max-lg:flex-col xl:pl-28 xl:px-28 max-w-7xl bg-body-alt border-border rounded-3xl home-page-project">
    <img src="{{ asset("images/mockups/flying-phone.png") }}" class="origin-center" alt="Web app: {{ $project['title'] }} mobile mockup image">

    <div class="flex flex-col max-w-xl gap-4 pt-24 origin-center lg:w-auto xl:pt-40 lg:-ml-16" id="right-content">
        <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-2xl tracking-[0.3em] uppercase font-quicksand">{{ $project['title'] }}</h3>
            @if ($isComingSoon)
                <livewire:shared.tag technology="Case study coming soon" />
            @endif
        </div>

        <div>
            <p>{{ $project["description"] }}</p>

            <div class="flex flex-wrap gap-1 mt-4">
                @foreach ($project["tags"] as $tag)
                    <livewire:shared.tag :technology="$tag" />
                @endforeach
            </div>
        </div>
    </div>
</section>