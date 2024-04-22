<section class="container flex items-start justify-center gap-10 mt-80">
	<h2 class="flex items-center gap-10 text-5xl font-bold whitespace-nowrap">
		{{ __("Hello there! 👋🏾") }} <span class="inline-block h-[1px] w-32 bg-border"></span>
	</h2>

	<div>
		@foreach (__("home.header.content_paragraphs") as $paragraph)
			<p class="max-w-2xl text-2xl">{{ $paragraph }}</p>
		@endforeach
	</div>
</section>
