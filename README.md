<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 15pt; font-family: Arial,sans-serif; color: #101828; background-color: #f9f9fa; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Comparison of SSR and CSR:</span></p>
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">While we are scaffolding vue js with laravel we will use both SSR and CSR. It depends on SEO Optimization, Server&rsquo;s computing power and security concerns.</span></p>
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Server Side Rendering:&nbsp;</span><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">When data is prepared from sever and pushed to client side that is server side rendering.</span></p>
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Client Side Rendering:&nbsp;</span><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">When data is prepared from browser that is client side rendering.<br /><br /></span></p>
<div dir="ltr" style="margin-left: 0pt;" align="center">
<table style="border: none; border-collapse: collapse;">
<tbody>
<tr style="height: 0pt;">
<td style="vertical-align: top; padding: 5pt 5pt 5pt 5pt; overflow: hidden; overflow-wrap: break-word; border: solid #000000 1pt;">
<p dir="ltr" style="line-height: 1.38; text-align: center; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Factors</span></p>
</td>
<td style="vertical-align: top; padding: 5pt 5pt 5pt 5pt; overflow: hidden; overflow-wrap: break-word; border: solid #000000 1pt;">
<p dir="ltr" style="line-height: 1.38; text-align: center; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Server Side Rendering</span></p>
</td>
<td style="vertical-align: top; padding: 5pt 5pt 5pt 5pt; overflow: hidden; overflow-wrap: break-word; border: solid #000000 1pt;">
<p dir="ltr" style="line-height: 1.38; text-align: center; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Client Side Rendering</span></p>
</td>
</tr>
<tr style="height: 0pt;">
<td style="vertical-align: top; padding: 5pt 5pt 5pt 5pt; overflow: hidden; overflow-wrap: break-word; border: solid #000000 1pt;">
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Security&nbsp;</span></p>
</td>
<td style="vertical-align: top; padding: 5pt 5pt 5pt 5pt; overflow: hidden; overflow-wrap: break-word; border: solid #000000 1pt;">
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Credential of api is secure. There is no way to retrieve any data related to&nbsp;</span></p>
</td>
<td style="vertical-align: top; padding: 5pt 5pt 5pt 5pt; overflow: hidden; overflow-wrap: break-word; border: solid #000000 1pt;">
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">There is no security of data when it&rsquo;s processed through client side. It&rsquo;s all accessible from browser and anybody can push the script to the site.</span></p>
</td>
</tr>
<tr style="height: 0pt;">
<td style="vertical-align: top; padding: 5pt 5pt 5pt 5pt; overflow: hidden; overflow-wrap: break-word; border: solid #000000 1pt;">
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Server&rsquo;s computing power</span></p>
</td>
<td style="vertical-align: top; padding: 5pt 5pt 5pt 5pt; overflow: hidden; overflow-wrap: break-word; border: solid #000000 1pt;">
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">SSR consumes server&rsquo;s computation power.&nbsp;</span><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;"><br /></span><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">And this is why also might decrease site&rsquo;s speed compared to CSR</span></p>
</td>
<td style="vertical-align: top; padding: 5pt 5pt 5pt 5pt; overflow: hidden; overflow-wrap: break-word; border: solid #000000 1pt;">
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">CSR uses client&rsquo;s devices computation power.That is why user experience is smother then SSR</span></p>
</td>
</tr>
<tr style="height: 73.3447265625pt;">
<td style="vertical-align: top; padding: 5pt 5pt 5pt 5pt; overflow: hidden; overflow-wrap: break-word; border: solid #000000 1pt;">
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">&nbsp;SEO Optimization</span></p>
</td>
<td style="vertical-align: top; padding: 5pt 5pt 5pt 5pt; overflow: hidden; overflow-wrap: break-word; border: solid #000000 1pt;">
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">On one page application we need SSR to add title to routes and meta data so that search engines can index those data.With out SSR there is no way to achieve seo optimization</span></p>
</td>
<td style="vertical-align: top; padding: 5pt 5pt 5pt 5pt; overflow: hidden; overflow-wrap: break-word; border: solid #000000 1pt;">
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Titles and meta data can not be added to all routes while using CSR. This hampers SEO optimization</span></p>
</td>
</tr>
</tbody>
</table>
</div>
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 15pt; font-family: Arial,sans-serif; color: #101828; background-color: #f9f9fa; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;"><br />Inertia.js Features:&nbsp;</span><span style="font-size: 15pt; font-family: Arial,sans-serif; color: #101828; background-color: #f9f9fa; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;"><br /></span></p>
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Here are some key features of Inertia:</span></p>
<ol style="margin-top: 0; margin-bottom: 0; padding-inline-start: 48px;">
<li dir="ltr" style="list-style-type: decimal; font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre;">
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Add titles and meta to all routes</span></p>
</li>
<li dir="ltr" style="list-style-type: decimal; font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre;">
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Links can handel to navigare both SSR and CSR also can act as button</span></p>
</li>
<li dir="ltr" style="list-style-type: decimal; font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre;">
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Links make api request</span></p>
</li>
<li dir="ltr" style="list-style-type: decimal; font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre;">
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Submitting form data is much easier</span></p>
</li>
<li dir="ltr" style="list-style-type: decimal; font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre;">
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Flashing messages is easier</span></p>
</li>
<li dir="ltr" style="list-style-type: decimal; font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre;">
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Get active page data easily</span></p>
</li>
<li dir="ltr" style="list-style-type: decimal; font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre;">
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Error handling is much more easier</span></p>
</li>
<li dir="ltr" style="list-style-type: decimal; font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre;">
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Creating a progress indicator is much more easier<br /><br /></span></p>
</li>
</ol>
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 15pt; font-family: Arial,sans-serif; color: #101828; background-color: #f9f9fa; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Integration with Laravel:&nbsp;</span><a style="text-decoration: none;" href="https://github.com/fimtiaz4/laravel-vue/"><span style="font-size: 15pt; font-family: Arial,sans-serif; color: #1155cc; background-color: #f9f9fa; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: underline; -webkit-text-decoration-skip: none; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">https://github.com/fimtiaz4/laravel-vue/</span></a></p>
<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 15pt; font-family: Arial,sans-serif; color: #101828; background-color: #f9f9fa; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;"><br />Client-Side Components:&nbsp;</span><span style="font-size: 15pt; font-family: Arial,sans-serif; color: #101828; background-color: #f9f9fa; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;"><br /></span><span style="font-size: 12pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">While we are creating applications with Vue js and Laravel alongside using Inertia.js, we can achieve strong securities, more seo friendly routing. In order to achieve this we install inertia and create SiteController to use inertia then return page in SiteController object. Then we use this SiteController on routes/web.php and add route with name for easy access of that vue component.</span></p>
<p><span style="color: rgb(16, 24, 40); font-family: Arial, sans-serif; font-size: 20px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: rgb(249, 249, 250); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">how to create a simple laravel-vue-inertia app:</span></p>
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
