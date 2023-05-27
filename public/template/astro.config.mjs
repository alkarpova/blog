import {defineConfig} from 'astro/config';
import tailwind from "@astrojs/tailwind";
import alpinejs from "@astrojs/alpinejs";

// https://astro.build/config
export default defineConfig({
    integrations: [tailwind(), alpinejs()],
    vite: {
        build: {
            rollupOptions: {
                output: {
                    entryFileNames: 'assets/js/main.min.js',
                    chunkFileNames: 'chunks/chunk.min.js',
                    assetFileNames: 'assets/css/style.min[extname]'
                }
            }
        }
    }
});
