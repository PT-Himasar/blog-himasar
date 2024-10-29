/**
 * Config
 * -------------------------------------------------------------------------------------
 * ! IMPORTANT: Make sure you clear the browser local storage In order to see the config changes in the template.
 * ! To clear local storage: (https://www.leadshook.com/help/how-to-clear-local-storage-in-google-chrome-browser/).
 */

'use strict';

// JS global variables
window.config = {
  colors: {
    primary: '#696cff',
    secondary: '#8592a3',
    success: '#71dd37',
    info: '#03c3ec',
    warning: '#ffab00',
    danger: '#ff3e1d',
    dark: '#233446',
    black: '#22303e',
    white: '#fff',
    cardColor: '#fff',
    bodyBg: '#f5f5f9',
    bodyColor: '#646E78',
    headingColor: '#384551',
    textMuted: '#a7acb2',
    borderColor: '#e4e6e8'
  }
};

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js', 'resources/assets/js/alert.js'],
      refresh: true
    })
  ],
  build: {
    manifest: true,
    outDir: 'public/build',
    rollupOptions: {
      input: {
        app: 'resources/js/app.js',
        alert: 'resources/assets/js/alert.js'
      },
      external: ['fsevents'] // Tambahkan baris ini
    }
  }
});
