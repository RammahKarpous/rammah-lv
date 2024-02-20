<?php
use function Livewire\Volt\{state, mount};
use App\Models\Company;
use App\Models\About;

state([
    'title_subtext',
    'companies',
    'prose' => '
        prose-p:mb-3 prose-p:mt-2
        prose-h2:font-bold prose-h2:mb-5 prose-h2:text-4xl
    ',
]);

mount(function () {
    $this->companies = Company::all();
    $this->title_subtext = About::first(['companies_title', 'companies_subtext']);
});
?>

<div class="flex flex-col items-center justify-center gap-8 my-96">
    <h2 class="text-5xl font-bold">{{ $title_subtext->companies_title }}</h2>
    <p class="max-w-2xl text-center">{{ $title_subtext->companies_subtext }}</p>

    @if ($companies)
        <section id="companies">
            <ul class="!flex gap-5 overflow-x-auto swiper-pagination">
                @foreach ($companies as $company)
                    <li><img src="{{ Storage::url($company->logo) }}" alt="" />
                    </li>
                @endforeach
            </ul>

            <div class="max-w-4xl swiper-wrapper">
                @foreach ($companies as $company)
                    <div class="mx-3 border rounded-md bg-body-alt border-border p-7 swiper-slide">
                        <h4 class="text-lg font-bold">{{ $company->name }}</h4>
                        <p class="my-3">{{ $company->description }}</p>

                        <a href="{{ $company->url }}" target="_blank" class="inline-block text-secondary"
                            rel="noopener noreferrer">Visit the website</a>
                    </div>
                @endforeach
            </div>
        </section>
    @else
        <p>No Companies</p>
    @endif
</div>
