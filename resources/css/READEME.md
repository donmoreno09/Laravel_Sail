# Configurazione TailwindCSS v4+ in Laravel Sail

## 1. Installazione delle dipendenze

```bash
npm install -D @tailwindcss/postcss autoprefixer
```

## 2. Configurazione PostCSS

```javascript
// postcss.config.js
export default {
    plugins: {
        '@tailwindcss/postcss': {},
        autoprefixer: {},
    }
}
```

## 3. Configurazione TailwindCSS

```javascript
// tailwind.config.js
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

## 4. File CSS principale

```css
/* resources/css/app.css */
@import "tailwindcss";
```

## 5. Configurazione Vite

```javascript
// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```

## 6. Layout Blade

```blade
{{-- Nel file layout principale --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

## 7. Avvia il server

```bash
npm run dev
```

## Note importanti per TailwindCSS v4+

- ❌ **Non usare** `@tailwind base; @tailwind components; @tailwind utilities;`
- ✅ **Usa** `@import "tailwindcss";`
- ✅ **Richiede** `@tailwindcss/postcss` invece di `tailwindcss` nel PostCSS
- ✅ **Il content** deve essere specificato nel `tailwind.config.js`
- ✅ **Compatibile** con Vite out-of-the-