<?php
use App\Models\Article;
use function Livewire\Volt\{state, mount};

state('articles');

mount(function () {
    $this->articles = Article::with('category')->orderBy('created_at', 'desc')->get();

    if ($this->articles->count() > 1) {
        $this->articles = $this->articles->skip(1);
    }
});
?>

<div>
    <div class="grid grid-cols-2 gap-3">
        @if (count($articles) > 0)
            @foreach ($articles as $article)
                <a href="article/{{ $article->slug }}" data-transition="article"
                    class="flex items-center gap-6 p-5 transition rounded-xl article hover:bg-body-alt">
                    <div class="w-[350px] shrink-0 rounded-lg h-[250px] bg-body-alt overflow-hidden shadow-lg">
                        <img src="{{ Storage::url($article->header_image) }}" alt="{{ $article->title }}"
                            class="object-cover w-full h-full">
                    </div>

                    <div class="flex flex-col">
                        <livewire:article.article-info 
                            :publish_date="$article->created_at" 
                            :category="$article->category->category" 
                            mb='4' />

                        <h2 class="mb-4 text-2xl font-bold">{{ $article->title }}</h2>
                        <p>{{ Str::limit($article->description, 110) }}</p>
                    </div>
                </a>
            @endforeach
        @endif
    </div>
</div>
