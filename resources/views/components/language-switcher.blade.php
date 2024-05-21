@php
	$locales = [["code" => "nl", "label" => "NL"], ["code" => "en", "label" => "EN"]];
@endphp

<nav class="relative z-20 mt-4">
	<ul>
		@foreach ($locales as $locale)
			@if (app()->getLocale() !== $locale["code"])
				<li>
					<a class="inline-block px-4 py-2 transition-all border border-gray-800 rounded-md hover:border-gray-700" 
						href="{{ url(getCurrentUrlWithLocale("/" . $locale["code"])) }}">{{ $locale["label"] }}</a>
				</li>
			@endif
		@endforeach
	</ul>
</nav>
