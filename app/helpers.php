<?php 
if (!function_exists('getCurrentUrlWithLocale')) {
    function getCurrentUrlWithLocale(string $locale) 
    {
        $segments = request()->segments();
        $segments[0] = $locale;
    
        return implode('/', $segments);
    }
}