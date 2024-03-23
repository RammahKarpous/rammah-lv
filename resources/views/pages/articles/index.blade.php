@section('view', 'articles')

<livewire:shared.seo
    title="Latest TALL-Stach (and more) articles"
    description="Rammah Karpous - Home"
    keywords="Tech Blog, Blog, Tech, Programmer Blog, Rammah Karpous, Front-end development, Back-end development, Web development, Web design, Responsive web design" />

<x-app-layout>
    <livewire:article.latest-article />
    <livewire:article.articles />
</x-app-layout>
