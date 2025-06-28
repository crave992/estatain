import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
  root: path.resolve(__dirname, 'assets/src'),
  build: {
    outDir: path.resolve(__dirname, 'assets'),
    emptyOutDir: false,
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, 'assets/src/js/main.ts'),
        style: path.resolve(__dirname, 'assets/src/scss/style.scss'),
      },
      output: {
        entryFileNames: 'js/[name].js',
        assetFileNames: 'css/[name].css',
      },
    },
  },
}); 