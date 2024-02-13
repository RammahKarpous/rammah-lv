import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                body: '131212',
                white: '#F8F4F4',
                black: '#202426',
                primary: '#2765DC',
                secondary: '#255FD0'
            },
            fontFamily: {
                inter: ['Inter', 'sans-serif'],
            },
        },
    },

    plugins: [forms],
};
