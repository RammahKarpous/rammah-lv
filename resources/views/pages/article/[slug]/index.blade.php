@section('view', 'article')

<?php
use function Livewire\Volt\{state, mount};
use Illuminate\Http\Request;

use App\Models\Article;

state([
    'article',
    'prose' => "
        prose-p:mb-6 prose-p:mt-2 prose-p:text-white
        prose-h2:text-2xl prose-h2:text-white prose-h2:font-bold prose-h2:mt-6 prose-h2:mb-1
        prose-pre:bg-body-alt prose-pre:rounded-lg prose-pre:p-4
    ",
]);

mount(function (Article $article, Request $request) {
    $this->article = $article::where('slug', $request->slug)->firstOrFail();
});
?>

<x-app-layout>
    @volt('article')
        <div>
            <div id="header-img" class="w-full rounded-lg h-[500px] bg-body-alt border border-border mt-16"></div>
            
            <div class="max-w-4xl mx-auto mt-8 mb-12">
                <h1 class="text-5xl font-bold mb-9" id="article-title">{{ $article->title }}</h1>
                <section class="{{ $prose }}" id="article-content">{!! (new Parsedown())->text($article->body) !!}</section>
            </div>
        </div>
    @endvolt
</x-app-layout>
