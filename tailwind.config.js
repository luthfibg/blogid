import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
                body: [
                    'Inter', 
                    'ui-sans-serif', 
                    'system-ui', 
                    '-apple-system', 
                    'system-ui', 
                    'Segoe UI', 
                    'Roboto', 
                    'Helvetica Neue', 
                    'Arial', 
                    'Noto Sans', 
                    'sans-serif', 
                    'Apple Color Emoji', 
                    'Segoe UI Emoji', 
                    'Segoe UI Symbol', 
                    'Noto Color Emoji'
                ],
            },
            colors: {
                primary: {
                    50: '#ffcccc',
                    100: '#ff9898',
                    200: '#ff8383',
                    300: '#ff6f6f',
                    400: '#ff5a5a',
                    500: '#ff4646',
                    600: '#ff3131',
                    700: '#e62c2c',
                    800: '#cc2727',
                    900: '#b32222',
                },
                secondary: {
                    100: '#ba97ff',
                    200: '#af86ff',
                    300: '#a375ff',
                    400: '#9863ff',
                    500: '#8c52ff',
                    600: '#7e4ae6',
                    700: '#7042cc',
                    800: '#6239b3',
                    900: '#543199',
                },
            },
            transitionProperty: {
                padding: 'padding',
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
        require('flowbite-typography'),
    ],
    safelist: [
        'bg-blue-100',
        'bg-green-100',
        'bg-yellow-100',
        'bg-red-100',
        'bg-purple-100',
        'bg-orange-100',
        'bg-gray-300',
        'text-blue-800',
        'text-green-800',
        'text-yellow-800',
        'text-red-800',
        'text-purple-800',
        'text-orange-800',
        'text-gray-800',
    ],
};
