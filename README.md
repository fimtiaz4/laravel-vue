1. composer create-project laravel/laravel example-app
2. cd example-app
3. composer require inertiajs/inertia-laravel
4. modify welcome.blade.php name to  app.blade.php from views/ then paste #Root-template from documentation/server-side
5. npm install @inertiajs/vue3
6. modify resources/js/app.js from documentation/client-side #Initialize the Inertia app
7. php artisan inertia:middleware
8. modify app/Http/Kernel.php 'web' => []
    \App\Http\Middleware\HandleInertiaRequests::class,
9. npm i @vitejs/plugin-vue
10. modify vite.config.js
    import vue from '@vitejs/plugin-vue'
    plugins: [
        vue(),
    ]
11. Create 'Pages' folder in resources/views/js to create vue files
12. Create controler 
        php artisan make:Controller SiteController
        Controller location app/Http/controllers/SiteController.php
15. modify SiteController.php
        use Inertia\Inertia;
        then in {} =>
        function Index(){
            return Inertia::render('index');
        }
16. modify routs/web.php
        use App\Http\Controllers\SiteController;
        Route::get('/', [SiteController::class,'index'])->name('Index');
17. Create Commponent folder to create vue Commponent
18. npm i bootstrap@5.3.2
19. modify resources/js/app.js 
        import "bootstrap";
        import "bootstrap/dist/css/bootstrap.css";
20. php artisan serve
21. npm run dev
