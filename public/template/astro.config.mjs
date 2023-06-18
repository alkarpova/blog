import {defineConfig} from 'astro/config';
import tailwind from "@astrojs/tailwind";

// https://astro.build/config
export default defineConfig({
    integrations: [tailwind()],
    vite: {
        build: {
            rollupOptions: {
                output: {
                    entryFileNames: 'assets/js/main.min.js',
                    chunkFileNames: 'assets/chunks/chunk.min.js',
                    assetFileNames: 'assets/css/style.min[extname]'
                }
            }
        }
    }
});
