<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield("title") | Rammah Karpous</title>
	<meta name="description" content="@yield("description")">
	<meta name="keywords" content="@yield("keywords")">

	<!-- Fonts -->
	<link rel="shortcut icon" href="{{ asset("favicon.png") }}" type="image/x-icon">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

	@production
		<!-- Start cookieyes banner -->
		<script id="cookieyes" type="text/javascript"
			src="https://cdn-cookieyes.com/client_data/d222d2fee1f2ce78a179ae85/script.js"></script>
		<!-- End cookieyes banner -->

		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-QN5S64TVFG"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'G-QN5S64TVFG');
		</script>
	@endproduction

	<!-- Scripts -->
	@vite(["resources/css/app.css", "resources/js/app.js"])
</head>

<body class="font-sans antialiased text-black bg-gray-100 dark:bg-body dark:text-white">
	<div class="flex flex-col justify-between min-h-screen">

		<main data-router-wrapper>
			<article data-router-view="@yield("view")">

				<!-- Navigation -->
				<livewire:shared.navigation />

				<!-- Page Content -->
				<div id="fade-content" class="overflow-x-hidden">
					{{ $slot }}
				</div>
			</article>
		</main>

		<!-- Footer -->
		<livewire:shared.footer />
	</div>

	@yield('scripts')
</body>

</html>
