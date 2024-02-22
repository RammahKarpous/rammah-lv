<?php
use function Livewire\Volt\{state, mount};
use App\Models\About;

state(['content']);

mount(function () {
    $this->content = About::first(['designs_title', 'designs_subtext', 'images']);
});
?>

<div class="container flex flex-col items-center justify-center gap-8 mx-auto my-56">
    @if ($content)
        <h2 class="text-5xl font-bold">{{ $content->designs_title }}</h2>
        <p class="max-w-2xl text-center">{{ $content->designs_subtext }}</p>
    @endif

    @if ($content)
        <section class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3" id="designs-gallery">
            @foreach ($content->images as $image)
                <a 
                    href="{{ Storage::url($image) }}" 
                    data-router-disabled 
                    data-pswp-width="1670" 
                    data-pswp-height="940"
                    target="_blank">
                    
                    <img src="{{ Storage::url($image) }}" alt="" class="w-full rounded-md" />
                </a>
            @endforeach
        </section>
    @else
        <p>No Designs</p>
    @endif
