@section("view", "links")

@php
	$links = [
	    ["name" => "VioWebX Innovations", "url" => "https://viowebx.com"],
	    ["name" => "Patreon", "url" => "https://rammahkarpous.com"],
	];
@endphp

<x-app-layout>
	<nav class="max-w-xl mx-auto mt-60">
		<ul class="flex flex-col gap-5">
			@foreach ($links as $link)
				<li><a class="inline-block w-full p-6 text-lg text-center border rounded-md font-quicksand bg-body-alt border-border" href="{{ $link["url"] }}">{{ $link["name"] }}</a></li>
			@endforeach
		</ul>
	</nav>
</x-app-layout>
