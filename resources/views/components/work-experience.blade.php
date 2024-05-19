<section class="mx-auto my-40 mb-12 max-w-7xl md:my-60">
    <h2 class="mx-4 mb-5 text-6xl font-bold text-white md:text-5xl">{{ __("Work experience") }}</h2>

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