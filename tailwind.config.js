const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            transparent: 'transparent',
            'white': '#ffffff',
            'primary': ' #F84453',
            'secondary': '#1D1D1D',
            'base': '#222222',
            'dark-gray': '#303030',
            'yellow': '#FFCC34'
        }
    },

    plugins: [require('@tailwindcss/forms')],
};
