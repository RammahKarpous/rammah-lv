<?php
use App\Models\Article;
use function Livewire\Volt\{state, mount};

state('articles');

mount(function (Article $article) {
    $this->articles = $article::all();
});
?>

<div>
    <h1 class="mt-12 mb-12 text-5xl font-bold" id="articles-title">Articles</h1>

    <div class="grid grid-cols-3 gap-8">
        @if (count($articles) > 0)
            @foreach ($articles as $article)
                <a href="article/{{ $article->slug }}" data-transition="article" class="flex flex-col gap-4 rounded-xl article group">
                    <div class="w-full rounded-lg h-[220px] bg-body-alt overflow-hidden">
                        <img src="{{ Storage::url($article->header_image) }}" alt="{{ $article->title }}" class="object-cover w-full h-full">
                    </div>

                    <div class="flex flex-col gap-4 px-6 py-4">
                        <h2 class="text-2xl font-bold">{{ $article->title }}</h2>
                        <p>{{ $article->description }}</p>
        
                        {{-- <small class="border border-gray-700 rounded-md">{{ $article->category->category }}</small> --}}
                        <span class="inline-block transition text-primary group-hover:text-secondary">Read more</span>
                    </div>
                </a>
            @endforeach
        @else
            <p>No articles found</p>
        @endif
    </div>
</div>
