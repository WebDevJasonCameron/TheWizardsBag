# NOTEs

Started the project using Laravel Herd application.  Afterward, I connected the folder sitting in the `~/herd` directory to my Github account.  Next I made a symbolic link to from my WizardsBag project folder.

I'm attempting to use PHPStorm for this project.  It runs a server but adds so many features to the URL address that it scrwws up the navigation if you use it.  I found that using the `php artisan serve` server command fixes this.  You can get to the page in the browser by using the IP address it provides.  In my case, it's working on http://127.0.0.1:8000 for now.

You still need to refresh the page every time you change something though.  I tried using the `npm run dev` within the PHPStorm IDE and it runs, but doesn't change anything.

## Components

To build a component, you should do it in the terminal with the following command: `php artisan make:component compnent-name`.  I think this creates two files.  One located in the /resources/views/components directory.  I'm not sure of the other, but they are needed.  The layout uses a `{{$slot}}` tag to allow you to place more content inside from your views pages

I had to create a layout component.  You use this in your views php pages with the flag `<x-component-name></x-component-name>`

## Tailwind

Get the docs here: [tailwind](https://tailwindcss.com/!). Use the following commands to install:

```bash
npm i -D tailwindcss postcss autoprefixer
npm i
```

Now have npx build a tailwind config file.  Note... you need nodeJS installed (but I thin we are good if we got this far with npm).  Use the following commands:

```bash
npx tailwindcss init -p
```

#### Workarounds
None of what should happened, happened in PHPStorm and I don't know why.  Here is what I had to do to get things to work:
1. Delete the node_modules from the terminal with `rm -rf node_modules package-lock.json`
2. Copy and past the node_modules from a working project
3. Run `npx tailwindcss init -p` to git the tailwindcss config file
4. Include the line `@vite('resources/css/app.css')` within the head of the layout.blade.php file
5. Replace the /resources/css/app.css content with:

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

6. Replace the vite.config.js content with:

```php
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

7. Finally tested this by including class tags with tw css in them and ran `npm run dev` in the terminal to see auto changes
