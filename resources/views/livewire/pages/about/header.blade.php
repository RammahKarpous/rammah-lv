<?php
use function Livewire\Volt\{state, mount};
use App\Models\About;

state([
    'content',
    'prose' => '
        prose-p:mb-3 prose-p:mt-2
        prose-h2:font-bold prose-h2:mb-5 prose-h2:text-4xl
    ',
]);

mount(function () {
    $this->content = About::first(['page_title', 'technologies', 'body']);
});
?>

<header
    class="flex flex-col gap-12 mt-20 lg:flex-row lg:items-center justify-between lg:gap-2 mx-auto lg:pl-32 lg:grid-cols-2 max-w-[calc(100vw-48px)] lg:max-w-full">
    <section class="flex flex-col gap-4">
        @if ($content)
            <h1 class="text-5xl font-bold uppercase sm:text-6xl mr-16 xl:text-[90px]">{!! $content->page_title !!}</h1>
        @endif

        @if ($content)
            <ul class="flex flex-wrap items-center gap-3">
                @foreach ($content->technologies as $technology)
                    <li>{{ $technology }}</li>
                    <span class="inline-block w-1 h-1 bg-white rounded-full last:hidden"></span>
                @endforeach
            </ul>
        @endif
    </section>

    @if ($content)
        <section
            class="flex items-center justify-center p-8 border xl:border-r-0 xl:p-20 2xl:p-48 rounded-xl lg:rounded-r-none rounded-l-xl bg-body-alt border-border">
            <div class="xl:w-[500px] {{ $prose }}">{!! (new Parsedown())->text($content->body) !!}</div>
        </section>
    @endif
</header>
