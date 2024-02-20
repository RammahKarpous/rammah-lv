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
    class="flex flex-col lg:flex-row 2xl:items-center justify-between gap-2 mx-auto lg:pl-32 lg:grid-cols-2 w-[calc(100vw-48px)] lg:w-full">
    <section class="flex flex-col gap-4">
        <h1 class="text-7xl font-bold uppercase sm:text-5xl lg:text-[90px]">{!! $content->page_title !!}</h1>

        <ul class="flex items-center gap-3">
            @foreach ($content->technologies as $technology)
                <li>{{ $technology }}</li>
                <span class="inline-block w-1 h-1 bg-white rounded-full last:hidden"></span>
            @endforeach
        </ul>
    </section>

    <section
        class="flex items-center justify-center border border-r-0 lg:p-32 2xl:p-48 rounded-l-xl bg-body-alt border-border">
        <div class="xl:w-[500px] {{ $prose }}">{!! (new Parsedown())->text($content->body) !!}</div>
    </section>
</header>
