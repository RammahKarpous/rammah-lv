@section('view', 'home')

<livewire:shared.seo 
    title="Full-stack web developer from Nijmegen, The Netherlands" 
    description="Rammah Karpous - Home" 
    keywords="Tech Blog, Blog, Tech, Programmer Blog, Rammah Karpous, Front-end development, Back-end development, Web development, Web design, Responsive web design">

<x-app-layout>
    <livewire:pages.about.header />

    <livewire:pages.about.companies />

    <livewire:pages.about.designs-gallery />
</x-app-layout>