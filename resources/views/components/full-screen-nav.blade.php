@php
	$contacts = [
	    [
	        "href" => "mailto:rammahkarpous@outlook.com",
	        "text" => "rammahkarpous@outlook.com",
	        "styles" => "",
	        "medium" => "email",
	        "target" => "_self",
	    ],
	    [
	        "href" => "tel:+31683915980",
	        "text" => __("+316 83 91 59 80"),
	        "styles" => "mt-2",
	        "medium" => "phone",
	        "target" => "_self",
	    ],
	    [
	        "href" => "https://github.com/rammahkarpous",
	        "text" => "rammahkarpous",
	        "styles" => "mt-6",
	        "medium" => "github",
	        "target" => "_blank",
	    ],
	];
@endphp

<div class="fixed top-0 right-0 z-10 flex flex-col items-center w-20 h-screen pt-5 group">
	<a href="/{{ app()->getLocale() }}" class="fixed z-10 left-10 top-10"><x-application-logo
			class="w-20 h-20 text-gray-500 fill-current" /></a>

	<span class="fixed top-0 z-10 w-px h-screen transition-all bg-border right-20 group-hover:bg-gray-800/50"></span>
	<x-hamburger-menu />
	<x-language-switcher />

	<div
		class="fixed top-0 right-0 z-0 flex flex-wrap items-center justify-between w-0 h-screen overflow-hidden opacity-0 bg-body"
		id="full-screen-nav">
		<div class="container flex justify-between mx-auto lg:items-end max-lg:flex-col">
			<nav id="main-nav">
				<ul class="flex flex-col gap-12 max-sm:gap-5">
					@foreach (__("navigation.links") as $link)
						@php
							$active_link = Request::route()->named($link["name"]) ? "text-primary" : "";
						@endphp

						<li>
							<a
								class="font-extrabold text-6xl sm:text-[100px] font-inter hover:text-primary transition-all {{ $active_link }}"
								href="{{ "/" . app()->getLocale() . $link["url"] }}">

								<span class="text-3xl font-normal">{{ $link["index"] }}</span>
								{{ $link["label"] }}
							</a>
						</li>
					@endforeach
				</ul>
			</nav>

			<nav class="mb-8 max-lg:mb-0 max-lg:mt-20" id="contacts">
				<ul>
					@foreach ($contacts as $contact)
						<li>
							<a href="{{ $contact["href"] }}"
								class="text-xl hover:text-primary transition-all flex gap-3 items-center {{ $contact["styles"] }}"
								target="{{ $contact["target"] }}">

								@if ($contact["medium"] === "email")
									<x-icons.mail />
								@endif
								@if ($contact["medium"] === "phone")
									<x-icons.phone />
								@endif
								@if ($contact["medium"] === "github")
									<x-icons.github />
								@endif

								<span class="-translate-y-[3px]">{{ $contact["text"] }}</span>
							</a>
						</li>
					@endforeach
				</ul>
			</nav>
		</div>
	</div>
</div>
