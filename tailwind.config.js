const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors:{
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            blue: colors.blue,
            green: colors.green,
            orange: colors.orange,
            white: colors.white,
            gray: colors.trueGray,
            indigo: colors.indigo,
            red: colors.red,
            yellow: colors.amber,
            icct: {
                verde: '#04a64a',
                azul: '#293258',
                cardio: '#ff0000',
                peso: '#081441',
                glicemia: '#33a23d'
            }
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
