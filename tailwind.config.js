const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')


module.exports = {
    prefix: 'tw-',
    important: true,
    mode: 'jit',

    purge: [

        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './public/**/*.html',
        './src/**/*.{js,jsx,ts,tsx,vue}',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'montserrat': ['Montserrat'],
                'manrope':['Manrope'],
            },
            fontSize: {
                'base': '0.5rem',
                'xxxs':'0.25rem',
            },
            colors: {
                sky: colors.sky,
                cyan: colors.cyan,
              },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
