const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            scale: {
                '175': '1.75',
            },
            height: {
                '128': '32rem',
                '256': '64rem',
            },
            animation: {
                'spin-slow': 'spin 3s linear infinite',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                serif: ['Merriweather', 'serif'],
            },
            grayscale: {
                50: '50%',
              }
           
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
