import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: '../../public/build-user',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        laravel({
            publicDirectory: '../../public',
            buildDirectory: 'build-user',
            input: [
                __dirname + '/resources/assets/sass/app.scss',
                __dirname + '/resources/assets/sass/noise.scss',
                __dirname + '/resources/assets/sass/layout.scss',
                __dirname + '/resources/assets/js/app.js',
                __dirname + '/node_modules/papercss/dist/paper.css',
                __dirname + '/node_modules/papercss/dist/paper.min.css',
            ],
            refresh: true,
        }),
    ],
});

export const paths = [
   'Modules/User/resources/assets/sass/app.scss',
   'Modules/User/resources/assets/sass/noise.scss',
   'Modules/User/resources/assets/sass/layout.scss',
   'Modules/User/resources/assets/js/app.js',
   'Modules/User/node_modules/papercss/dist/paper.css',
   'Modules/User/node_modules/papercss/dist/paper.min.css',
];