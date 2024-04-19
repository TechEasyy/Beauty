import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/style.css', 'resources/css/montarCronograma.css', 'resources/css/capa.css', 'resources/css/crud.css', 
            'resources/css/crudCliente.css', 'resources/css/terceiraTela', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
