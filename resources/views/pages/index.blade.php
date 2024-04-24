@section('view', 'home')

<livewire:shared.seo 
    title="Full-stack web developer from Nijmegen, The Netherlands" 
    description="Rammah Karpous - Home" 
    keywords="Tech Blog, Blog, Tech, Programmer Blog, Rammah Karpous, Front-end development, Back-end development, Web development, Web design, Responsive web design">

<x-app-layout>
    <livewire:pages.about.header />

    <section class="container flex items-start justify-between gap-5 px-4 mx-auto my-10 lg:my-40 max-lg:flex-col lg:gap-10 about-me">
        <div class="flex items-center justify-center gap-12">
            <h2 class="flex-grow text-4xl font-bold whitespace-nowrap font-inter">{{ __('Hello there!') }}</h2>
            <span class="bg-border w-40 flex-shrink h-[2px]"></span>
        </div>

        <div class="flex flex-col max-w-screen-sm gap-4 text-xl">
            @foreach (__('home.header.content_paragraphs') as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
        </div>
    </section>
    
    {{-- Articles --}} 
    <div class="max-w-6xl px-4 mx-auto mb-20">
        <h2 class="mb-5 text-5xl font-bold">{{ __('Latest article') }}</h2>
        <livewire:article.latest-article margin="mb-0" />
    </div>
</x-app-layout>