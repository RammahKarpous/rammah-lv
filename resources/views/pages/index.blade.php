@section("view", "home")

<livewire:shared.seo title="Full-stack web developer from Nijmegen, The Netherlands" description="Rammah Karpous - Home"
	keywords="Tech Blog, Blog, Tech, Programmer Blog, Rammah Karpous, Front-end development, Back-end development, Web development, Web design, Responsive web design">

	<x-app-layout>
		<livewire:pages.about.header />

		<section class="container flex items-start justify-center gap-5 px-4 mx-auto mb-20 max-lg:flex-col lg:gap-10 about-me">
			<div class="flex flex-col max-w-screen-lg gap-4 text-xl sm:text-center md:text-2xl">
				@foreach (__("home.header.content_paragraphs") as $paragraph)
					<p>{{ $paragraph }}</p>
				@endforeach
			</div>
		</section>

		<x-technologies />

		<x-work-experience />

		{{-- Articles --}}
		<section class="max-w-6xl px-4 mx-auto mb-20">
			<h2 class="mb-5 text-5xl font-bold">{{ __("Latest article") }}</h2>
			<livewire:article.latest-article margin="mb-0" headingType="h2" />
		</section>
	</x-app-layout>
