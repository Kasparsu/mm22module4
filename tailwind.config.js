import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#9900CC",
                secondary: "#D699EB",
                success: "#00F937",
                defeat: "#D00000",
            },
            fontFamily: {
                primary: ["Kenyan Coffee"],
                secondary: ["Komikazoom"],
            },
            brightness: {
                40: ".40",
            },
            height: {
                inherit: "inherit",
            },
            width: {
                inherit: "inherit",
            },
        },
    },
    plugins: [],
};
