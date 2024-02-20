<?php
use function Livewire\Volt\{state, mount};
use App\Models\About;

state(['content']);

mount(function () {
    $this->content = About::first(['designs_title', 'designs_subtext', 'images']);
});
?>

<div class="container flex flex-col items-center justify-center gap-8 mx-auto my-56">
    <h2 class="text-5xl font-bold">{{ $content->designs_title }}</h2>
    <p class="max-w-2xl text-center">{{ $content->designs_subtext }}</p>

    @if ($content->images)
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3" id="designs-gallery">
            @foreach ($content->images as $image)
                <img src="{{ Storage::url($image) }}" alt="" />
            @endforeach
        </section>
    @else
        <p>No Designs</p>
    @endif
