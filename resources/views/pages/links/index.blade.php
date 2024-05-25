@section("view", "links")

@php
	$links = [
	    ["name" => __("navigation.links.1.label"), "url" => "/" . app()->getLocale() . "/articles", "target" => "_self"],
	    ["name" => "LinkedIn", "url" => "https://linkedin.com/in/rammahkarpous", "target" => "_blank"],
	    ["name" => "Github", "url" => "https://github.com/rammahkarpous", "target" => "_blank"],
	    ["name" => "Instagram", "url" => "https://instagram.com/rammahkarpous", "target" => "_blank"],
	    // ["name" => "Patreon", "url" => "https://rammahkarpous.com"],
	    // ["name" => "VioWebX Innovations", "url" => "https://viowebx.com"],
	];
@endphp

<x-app-layout>
	<nav class="max-w-xl mx-auto mt-60">
		<ul class="flex flex-col gap-5">
			@foreach ($links as $link)
				@if ($link["target"] === "_self")
					<li><a
							class="inline-block w-full p-6 text-lg text-center border rounded-md font-quicksand bg-body-alt border-border"
							href="{{ $link["url"] }}">{{ $link["name"] }}</a></li>
				@else
					<li><a
							class="inline-block w-full p-6 text-lg text-center border rounded-md font-quicksand bg-body-alt border-border"
							target="{{ $link["target"] }}" href="{{ $link["url"] }}">{{ $link["name"] }}</a></li>
				@endif
			@endforeach
		</ul>
	</nav>
</x-app-layout>
