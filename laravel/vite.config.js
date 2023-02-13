import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({

    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'node_modules/ckeditor4/ckeditor.js'
            ],
            refresh: true,
        }),
    ],


});
