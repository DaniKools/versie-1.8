<?php
/**
 * Created by PhpStorm.
 * User: sova
 * Date: 2/11/2021
 * Time: 1:54 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Business Cards | <?php echo $__env->yieldContent('title'); ?></title>
</head>
 <body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
         <div class="container">
             <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><h1>Business Cards App</h1></a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                     <li class="nav-item">
                         <a class="nav-link <?php echo e(\Request::is('/') ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link <?php echo e(\Request::is('about') ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>">About</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link <?php echo e(\Request::is('contact') ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">Contact</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link <?php echo e(\Request::is('customers*') ? 'active' : ''); ?>" href="<?php echo e(route('customers.index')); ?>">Customers</a>
                    </li>
                     
                         
                     
                 </ul>
             </div>
         </div>
     </nav>

    <section class="content">
        <div class="container">
            <?php echo $__env->make('partials.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </section>

     <footer class="footer-bg">
         <div class="container">
             <p class="footer_text">Sofie &copy; Laravel Business Cards site, to improve your business experience!</p>
         </div>
     </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/business_cards_frontend/resources/views/layouts/master.blade.php ENDPATH**/ ?>