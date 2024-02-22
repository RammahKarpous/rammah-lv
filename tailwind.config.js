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
                body: '#131212',
                "body-alt": "#181818",
                border: '#1E1D1D',
                white: '#F8F4F4',
                black: '#202426',
                primary: '#2765DC',
                secondary: '#255FD0',
                technology: {
                    laravel: '#F05340',
                    reactjs: '#00D8FF',
                    wordpress: '#387599',
                    tailwindcss: '#60BCF3',
                    php: '#525D8C'
                }
            },
            fontFamily: {
                inter: ['Inter', 'sans-serif'],
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
