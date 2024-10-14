import defaultTheme from "tailwindcss/defaultTheme";
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        // You will probably also need these lines
        "./resources/**/**/*.blade.php",
        "./resources/**/**/*.js",
        "./app/View/Components/**/**/*.php",
        "./app/Livewire/**/**/*.php",

        // Add mary
        "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
    ],
    theme: {
        extend: {
            colors: {
                pink: "#FB657A",
                heading: "#F14C4C",
                cInput: "#F4F4F4"
            },
            fontFamily: {
                sans: ["Poppins", "Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    // Add daisyUI
    plugins: [
        require("daisyui"),
        // Other plugins if you have any
    ],
    // DaisyUI configuration
    daisyui: {
        themes: ["light", "dark", "cupcake","cyberpunk"], // Menambahkan tema yang diinginkan
    },
};
