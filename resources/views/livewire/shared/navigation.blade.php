<nav class="container fixed z-10 flex items-center justify-between p-6 -translate-x-1/2 rounded-lg top-5 left-1/2 sm:right-0 text-end" id="navigation">
    <a href="/"><x-application-logo class="w-20 h-20 text-gray-500 fill-current" /></a>

    <ul class="flex space-x-3">
        @foreach (__('navigation.links') as $link)
            <li><a class="inline-block p-4" href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
        @endforeach

        {{-- <livewire:shared.active-link-indicator />  --}}
    </ul>
</nav>
