import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: true, // Permet d'accepter les connexions sur localhost et réseau
        port: 5173,
        hmr: {
            host: 'localhost', // Modifiez si nécessaire
        },
    },
});
