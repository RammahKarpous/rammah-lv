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
        container: {
            center: true,
            padding: '1rem',
        },
        extend: {
            colors: {
                body: '#0F1119',
                "body-alt": "#10121A",
                border: '#141620',
                code: '#20242a',
                white: '#F8F4F4',
                black: '#202426',
                primary: '#2765DC',
                secondary: '#255FD0',
            },
            fontFamily: {
                inter: ['Inter', 'sans-serif'],
                quicksand: ['Quicksand', 'sans-serif'],
            },
        },
    },

    plugins: [
        forms,
        require('@tailwindcss/typography', {
            className: 'md',
        })
    ],
};
