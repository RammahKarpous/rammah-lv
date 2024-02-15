<?php
use function Livewire\Volt\{state, mount};
use App\Models\Article;

state('articles');

mount(function (Article $article) {
    $this->articles = $article::all();
});
?>

<div class="grid grid-cols-3 gap-4">
    @if (count($articles) > 0)
        @foreach ($articles as $article)
            <article class="p-5 border rounded-md border-border bg-body-alt">
                <h2 class="text-2xl font-bold">{{ $article->title }}</h2>
                <p>{{ $article->description }}</p>

                {{-- <small class="border border-gray-700 rounded-md">{{ $article->category->category }}</small> --}}
                <a href="article/{{ $article->slug }}" wire:navigate>Read more</a>
            </article>
        @endforeach
    @else
        <p>No articles found</p>
    @endif
</div>
