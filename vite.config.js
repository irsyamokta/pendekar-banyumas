import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { VitePWA } from 'vite-plugin-pwa';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/style.css',
                'resources/css/satoshi.css',
                'resources/js/app.js', 
                'resources/js/index.js',
                'resources/js/script.js'],
            refresh: true,
        }),
        VitePWA({
            registerType: 'autoUpdate',
            devOptions: {
                enabled: true
            },
            manifest: {
                name: 'Pendekar Banyumas App',
                short_name: 'Pendekar Banyumas',
                description: 'Pendekar Banyumas Progresive Web App',
                theme_color: '#ffffff',
                icons: [
                    {
                        src: 'icon-192x192.png',
                        sizes: '192x192',
                        type: 'image/png'
                    },
                    {
                        src: 'icon-512x512.png',
                        sizes: '512x512',
                        type: 'image/png'
                    }
                ]
            }
        }),
    ],
});