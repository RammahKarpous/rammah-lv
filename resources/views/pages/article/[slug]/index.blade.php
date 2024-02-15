<?php
use function Livewire\Volt\{state, mount};
use Illuminate\Http\Request;

use App\Models\Article;

state([
    'article',
    'prose' => 'prose-p:my-2 prose-h2:text-2xl prose-pre:p-4 prose-pre:bg-body-alt prose-pre:rounded-lg prose-pre:my-4',
]);

mount(function (Article $article, Request $request) {
    $this->article = $article::where('slug', $request->slug)->firstOrFail();
});
?>

<x-app-layout>
    @volt('article')
        <div class="max-w-4xl mx-auto mt-32">
            <h1 class="mb-6 text-5xl font-bold">{{ $article->title }}</h1>
            <section class="{{ $prose }}">{!! $article->body !!}</section>
        </div>
    @endvolt
</x-app-layout>
