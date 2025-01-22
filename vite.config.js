import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: process.env.VITE_HOST || '127.0.0.1', // Host default
        port: parseInt(process.env.VITE_PORT, 10) || 5173, // Port default
        strictPort: true, // Pastikan menggunakan port yang spesifik
    },
    base: process.env.VITE_BASE_URL || '/', // Base URL default
});

