/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        'node_modules/preline/dist/*.js',

    ],
    theme: {
        fontFamily: {
            'poppins': ['Poppins', 'sans-serif'],
        },
        extend: {
            colors: {
                brand: {
                    green: {
                        500: "#004F44"
                    }
                }
            }
        },
    },
    plugins: [
        require('preline/plugin'),
    ],
}
