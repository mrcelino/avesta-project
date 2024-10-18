import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/**/*.blade.php",
        "./resources/**/**/*.js",
        "./app/View/Components/**/**/*.php",
        "./app/Livewire/**/**/*.php",
        "./vendor/robsontenorio/mary/src/View/Components/**/*.php",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'heroes': "url('/image/bghero.png')",
            },
            keyframes: {
                shake: {
                    '0%': { transform: 'translate(0)' },
                    '25%': { transform: 'translate(-5px, 5px)' },
                    '50%': { transform: 'translate(5px, -5px)' },
                    '75%': { transform: 'translate(-5px, -5px)' },
                    '100%': { transform: 'translate(0)' },
                },
            },
            animation: {
                shake: 'shake 1s infinite', // Tambahkan animasi shake
            },
            colors: {
                pink: "#FB657A",
                heading: "#F14C4C",
                cInput: "#F4F4F4",
            },
            fontFamily: {
                sans: ["Poppins", "Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        require("daisyui"),
        // Plugin lainnya jika ada
    ],
    daisyui: {
        themes: ["light", "dark", "cupcake", "cyberpunk"], // Menambahkan tema yang diinginkan
    },
};
