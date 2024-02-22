<?php
use function Livewire\Volt\{state, mount};

state([
    'publish_date', 
    'category', 
    'mb',
    'bg',
    'text',
]);

mount(function () {
    switch ($this->category->slug) {
        case 'laravel': 
            $this->bg = "bg-technology-laravel-bg"; 
            $this->text = "bg-technology-laravel-text"; 
            break;
        case 'reactjs': 
            $this->bg = "bg-technology-reactjs-bg"; 
            $this->text = "bg-technology-reactjs-text"; 
            break;
        case 'nextjs': 
            $this->bg = "bg-technology-nextjs-bg"; 
            $this->text = "bg-technology-nextjs-text"; 
            break;
        case 'tailwindcss': 
            $this->bg = "bg-technology-tailwindcss-bg"; 
            $this->text = "bg-technology-tailwindcss-text"; 
            break;
        case 'php': 
            $this->bg = "bg-technology-php-bg"; 
            $this->text = "bg-technology-php-text"; 
            break;
        case 'wordpress': 
            $this->bg = "bg-technology-wordpress-bg"; 
            $this->text = "bg-technology-wordpress-text"; 
            break;
        
        default:
            # code...
            break;
    }
})
?>

<div class="flex items-center gap-3 mb-{{ $mb }}">
    <span class="text-gray-500">{{ \Carbon\Carbon::parse($publish_date)->format('j F Y') }}</span>
    <span class="inline-block w-1 h-1 bg-white rounded-full"></span>
    <span class="px-4 py-1 rounded-md {{ $bg }} {{ $text }}">{{ $category->category }}</span>
</div>