import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: '/build/', // ensures proper URL resolution
    build: {
        manifest: true, // generates manifest.json for asset linking
        outDir: 'public/build', // required for Laravel to serve assets
        rollupOptions: {
            input: ['resources/css/app.css', 'resources/js/app.js'],
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
