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
                    laravel: { bg: '#F05340', text: '#F8F4F4', },
                    reactjs: { bg: '#00D8FF', text: '#131212', },
                    reactjs: { bg: '#00D8FF', text: '#131212', },
                    reactjs: { bg: '#ffffff', text: '#000000', },
                    wordpress: { bg: '#387599', text: '#F8F4F4', },
                    tailwindcss: { bg: '#60BCF3', text: '#131212', },
                    php: { bg: '#525D8C', text: '#F8F4F4', }
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
