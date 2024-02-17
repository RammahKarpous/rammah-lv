<?php
use App\Models\Article;

use function Livewire\Volt\{state, mount};

state(['article']);

mount(function () {
    $this->article = Article::latest()->first();
});
?>
@if ($article)
    <div class="article">
        <a href="article/{{ $article->slug }}" data-transition="article"
            class="flex items-center max-w-6xl gap-8 p-5 mx-auto my-20 transition rounded-lg hover:bg-body-alt">
            <div class="w-[550px] shrink-0 rounded-lg h-[320px] bg-body-alt overflow-hidden shadow-lg">
                <img src="{{ Storage::url($article->header_image) }}" alt="{{ $article->title }}"
                    class="object-cover w-full h-full">
            </div>

            <div>
                <livewire:article.article-info 
                    :publish_date="$article->created_at" 
                    :category="$article->category->category" 
                    mb="4" />
                    
                <h1 class="mb-3 text-4xl font-bold leading-snug">{{ $article->title }}</h1>
                <p>{{ Str::limit($article->description, 140) }}</p>
            </div>
        </a>
    </div>
@else
    <p>No articles found</p>
@endif
