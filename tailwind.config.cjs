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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundSize: {
                'none': 'none',
                'auto': 'auto',
                'cover': 'cover',
                'contain': 'contain',
                '30%': '30%',
                '40%': '40%',
                '45%': '45%',
                '50%': '50%',
                '60%': '60%',
                '70%': '70%',
                '80%': '80%',
                '90%': '90%',
                '100%': '100%',
                '120%': '120%',
                '150%': '150%',
                '200%': '200%',
                '16': '4rem',
            },
            backgroundPosition: {
                bottom: 'bottom',
                'bottom-4': 'center bottom 1rem',
                center: 'center',
                left: 'left',
                'left-bottom': 'left bottom',
                'left-top': 'left top',
                'left-10-top': 'left -30rem top',
                right: 'right',
                'right-bottom': 'right bottom',
                'right-bottom-10': 'right bottom -10rem',
                'right-top': 'right top',
                'right-15-top': 'right -15rem top',
                top: 'top',
                'top-4': 'center top 1rem',
            },
            screens: {
                'lt': '359px',
                // => @media (min-width: 360px) { ... }

                'sm': '640px',
                // => @media (min-width: 640px) { ... }

                'md': '768px',
                // => @media (min-width: 768px) { ... }

                'lg': '1024px',
                // => @media (min-width: 1024px) { ... }

                'xl': '1280px',
                // => @media (min-width: 1280px) { ... }

                '2xl': '1536px',
                // => @media (min-width: 1536px) { ... }
            },
            backgroundImage: {
                'molecule-left': "url('../img/molecule-left.png')",
                'molecule-right': "url('../img/molecule-right.png')",
                'molecule-one-svg': "url('../img/molecule-1.svg')",
                'molecule-two-svg': "url('../img/molecule-2.svg')",
                'manufacturing': "url('../img/manufacturing.png')",
                'home': "url('../img/header.png')",
                'app-top': "url('../img/header_2.png')",
                'about-us-molecule': "url('../img/about_us/molecule-about-us.png')",
                'about-us-image-line': "url('../img/about_us/image-line.png')",
                'manufacturing-image-line': "url('../img/manufacturing/manufacturing-2.png')",
                'facility-image-line': "url('../img/facility/facility-image-line.png')",
                'quality-image-line': "url('../img/quality/quality-image-line.png')",
                'quality': "url('../img/quality/quality.svg')",

            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'white': '#ffffff',
                'light-green': '#b0d391',
                'dark-green': '#225209',



            },

        },

        borderWidth: {
            DEFAULT: '1px',
            '0': '0',
            '2': '2px',
            '3': '3px',
            '4': '4px',
            '6': '6px',
            '8': '8px',
            '10': '10px',
            '12': '12px',
            '14': '14px',
            '16': '16px',
        },


    },

    plugins: [require('@tailwindcss/forms')],
};


