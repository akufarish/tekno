import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "public/js",
                "resources/sass/app.scss",
                "public/css",
                "node_modules/@fortawesome/fontawesome-free/webfonts",
                "public/webfonts",
            ],
            refresh: true,
        }),
    ],
});
