<?php
use App\Models\Article;

use function Livewire\Volt\{state, mount};

state(["article", "margin" => "my-20", "headingType"]);

mount(function () {
    $this->article = Article::latest()->with("category")->first();
});
?>

<div>
	@if ($article)

		@if (Route::currentRouteName() === "home")
			<h2 class="mb-5 text-5xl font-bold">{{ __("Latest article") }}</h2>
		@endif

		<div class="max-w-xl {{ $margin }} lg:max-w-5xl xl:max-w-full sm:mx-auto article">
			<a href="/{{ app()->getLocale() }}/article/{{ $article->slug }}" data-transition="article"
				class="flex flex-col items-center max-w-6xl gap-8 py-5 mx-auto transition rounded-lg lg:flex-row bg-body-alt xl:bg-transparent hover:bg-body-alt">
				<div
					class="w-full lg:w-[450px] xl:w-[550px] shrink-0 rounded-lg h-[320px] md:h-[400px] lg:h-[320px] bg-body-alt overflow-hidden shadow-lg">
					<img src="{{ Storage::url($article->header_image) }}" alt="{{ $article->title }}" class="object-cover w-full h-full">
				</div>

				<div class="px-5">
					<livewire:article.article-info :publish_date="$article->created_at" :category="$article->category" mb="4" />

					@if ($headingType === "h1")
						<h1 class="mb-3 text-4xl font-bold leading-snug">{{ $article->title }}</h1>
					@else
						<h2 class="mb-3 text-2xl font-bold leading-snug md:text-4xl">{{ $article->title }}</h2>
					@endif
					<p>{{ Str::limit($article->description, 140) }}</p>
				</div>
			</a>
		</div>
	@else
		@if (Route::currentRouteName() === "articles")
			<h2 class="mb-10 text-5xl font-bold text-center">{{ __("Latest article") }}</h2>
			<p class="text-center">{{ __("No article are yet published") }}</p>
		@endif
	@endif
</div>
