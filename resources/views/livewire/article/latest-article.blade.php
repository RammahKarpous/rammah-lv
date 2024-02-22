<?php
use App\Models\Article;

use function Livewire\Volt\{state, mount};

state(['article']);

mount(function () {
    $this->article = Article::latest()->with('category')->first();
});
?>

<div>
    @if ($article)
        <div class="max-w-xl mx-5 lg:max-w-5xl xl:max-w-full sm:mx-auto article">
            <a href="article/{{ $article->slug }}" data-transition="article"
                class="flex flex-col items-center max-w-6xl gap-8 p-5 mx-auto my-20 transition rounded-lg lg:flex-row bg-body-alt xl:bg-transparent hover:bg-body-alt">
                <div class="w-full lg:w-[450px] xl:w-[550px] shrink-0 rounded-lg h-[320px] md:h-[400px] lg:h-[320px] bg-body-alt overflow-hidden shadow-lg">
                    <img 
                        src="{{ Storage::url($article->header_image) }}" 
                        alt="{{ $article->title }}"
                        class="object-cover w-full h-full">
                </div>
    
                <div>
                    <livewire:article.article-info 
                        :publish_date="$article->created_at" 
                        :category="$article->category" 
                        mb="4" />
                        
                    <h1 class="mb-3 text-4xl font-bold leading-snug">{{ $article->title }}</h1>
                    <p>{{ Str::limit($article->description, 140) }}</p>
                </div>
            </a>
        </div>
    @else
        <p class="mt-10 text-center">No articles found</p>
    @endif
</div>

