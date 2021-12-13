const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    // mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
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
