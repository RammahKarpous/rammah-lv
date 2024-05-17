<header
	class="flex items-center justify-center w-full mt-64">
	<section class="flex flex-col items-center -translate-y-24">
		<span class="absolute -translate-y-80 -z-10 top-1/2"><x-circle-gradient /></span>
		
		<img 
			src="{{ asset("images/me.png") }}" 
			alt="{{ __("An image of me") }}"
			class="z-10 w-40 mx-auto mb-3 rounded-full shadow-xl xl:-mb-10 me-image">
			
		<h1 class="text-5xl font-bold uppercase sm:text-6xl md:text-[90px] xl:text-[130px] text-center text-[#191C29] max-w-screen-xl flex flex-col">
			<span class="page-heading">Full stack</span> <span class="page-heading">web developer</span></h1>

		<p class="text-xl font-bold tracking-[0.3em] text-center uppercase greeting-with-name">{{ __("Hello! 👋🏾 I'm Rammah") }}</p>
	</section>

	<span 
		class="absolute w-4 h-10 transition-all duration-300 cursor-pointer hover:h-12 bottom-10 hover:bottom-6" 
		id="scroll-down">
		
		{{-- <x-icons.arrow-down /> --}}
	</span>
</header>