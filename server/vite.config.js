import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';


export default defineConfig({
    build:{
        commonjsOptions: {
            sourceMap: false
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'node_modules/@govbr-ds/core/dist/core.min.css',
                'resources/css/custom.css', 
                'node_modules/@govbr-ds/core/dist/core.min.js',
                'node_modules/@govbr-ds/core/dist/core-init.js',
                'resources/js/app.js',
                'resources/js/custom.js'
            ],
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
    server: {
        hmr: {
            host: 'host.docker.internal',
        },
    },

});
