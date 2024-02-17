@section('view', 'article')

<?php
use function Livewire\Volt\{state, mount};
use Illuminate\Http\Request;

use App\Models\Article;

state([
    'article',
    'prose' => "
        prose-p:mb-3 prose-p:mt-2 prose-p:text-white
        prose-h2:text-2xl prose-h2:text-white prose-h2:font-bold prose-h2:mt-10 prose-h2:mb-2
        prose-code:rounded-lg prose-code:my-3
        prose-ul:pl-8 prose-ul:list-disc
        prose-ol:pl-8 prose-ol:list-decimal
        prose-li:leading-7
    ",
]);

mount(function (Article $article, Request $request) {
    $this->article = $article::where('slug', $request->slug)->firstOrFail();
});
?>

<x-app-layout>
    @volt('article')
        <div>
            <div id="header-img" class="w-full overflow-hidden rounded-lg h-[700px] flex items-center justify-center mt-16 relative">
                <img src="{{ Storage::url($article->header_image) }}" alt="{{ $article->title }}" class="object-fill w-full h-full">
            </div>
            
            <div class="max-w-4xl mx-auto mt-8 mb-12">
                <h1 class="text-5xl font-bold mb-9" id="article-title">{{ $article->title }}</h1>
                <section class="{{ $prose }}" id="article-content">{!! (new Parsedown())->text($article->body) !!}</section>
            </div>
        </div>
    @endvolt
</x-app-layout>
