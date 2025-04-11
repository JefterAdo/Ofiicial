import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/css/filament/admin/theme.css",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": "/resources/js",
        },
    },
    build: {
        outDir: "public/build",
        assetsDir: "",
        manifest: true,
        rollupOptions: {
            output: {
                manualChunks: undefined,
            },
        },
        // Optimisations pour Hostinger
        chunkSizeWarningLimit: 1000,
        cssCodeSplit: true,
        minify: "terser",
    },
    server: {
        hmr: {
            host: "www.zertos.online",
        },
    },
});
