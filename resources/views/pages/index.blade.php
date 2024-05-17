@section("view", "home")

<livewire:shared.seo title="Full-stack web developer from Nijmegen, The Netherlands" description="Rammah Karpous - Home"
	keywords="Tech Blog, Blog, Tech, Programmer Blog, Rammah Karpous, Front-end development, Back-end development, Web development, Web design, Responsive web design">

	<x-app-layout>
		<livewire:pages.about.header />

		<section class="container flex items-start justify-center gap-5 px-4 mx-auto mb-20 max-lg:flex-col lg:gap-10 about-me">
			<div class="flex flex-col max-w-screen-lg gap-4 text-center sm:text-lg md:text-2xl">
				@foreach (__("home.header.content_paragraphs") as $paragraph)
					<p>{{ $paragraph }}</p>
				@endforeach
			</div>
		</section>

		<section class="mx-auto mb-12 max-w-7xl sm:my-16">
			<h2 class="text-[#151823] -mb-2 mx-4 font-bold text-6xl md:text-[90px]">{{ __("Work experience") }}</h2>

			@foreach (__("work-experience") as $experience)
				<div class="flex flex-col gap-2 px-4 pt-3 pb-5 border-t lg:pt-5 lg:pb-10 md:flex-row md:justify-between border-border">
					<p class="italic">{{ $experience["period"] }}</p>

					<div class="max-w-screen-sm">
						<h3 class="mb-1 text-xl font-bold">{{ $experience["title"] }}</h3>
						<p>{{ $experience["description"] }}</p>

						<div class="flex flex-wrap gap-1 mt-2">
							@foreach ($experience["tags"] as $tag)
								<livewire:shared.tag technology="{{ $tag }}">
							@endforeach
						</div>
					</div>
				</div>
			@endforeach
		</section>

		{{-- Articles --}}
		<section class="max-w-6xl px-4 mx-auto mb-20">
			<h2 class="mb-5 text-5xl font-bold">{{ __("Latest article") }}</h2>
			<livewire:article.latest-article margin="mb-0" headingType="h2" />
		</section>
	</x-app-layout>
