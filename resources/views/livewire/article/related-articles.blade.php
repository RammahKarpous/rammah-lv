<?php 
use function Livewire\Volt\{state, mount};

use App\Models\Article;

state(['articles', 'category']);

mount(function () {
    $this->articles = Article::whereHas('category', function ($query) use ($category) {
        $query->where('name', $category);
    })->inRandomOrder()->get();
})
?>

<div>

</div>