<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo $__env->yieldContent('pageTitle'); ?></title>
        <meta name="" content="">
        <meta name="title" content="We human">
        <meta name="description" content="Fearless Partner in Creativity. For the new digital world">
        <meta name="keywords" content="we human">

        <meta name="author" content="Rik Vermeulen">
        <link rel="author" href="humans.txt">

        <meta name="google" content="notranslate">
        <meta name="theme-color" content="#fff">
        <meta name="generator" content="PHPStorm">

        <link rel="license" href="copyright.html">

        <!--social-->
        <meta property="og:url" content="">
        <meta property="og:type" content="">
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="">

        <meta name="twitter:card" content="summary/description">
        <meta name="twitter:url" content="https://website.com">
        <meta name="twitter:title" content="Title of website">
        <meta name="twitter:description" content="description">

        <!--google-->
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="3 month" />

        <!--favicon-->
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo e(asset('image/favicon.ico')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(asset('image/favicon.ico')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(asset('image/favicon.ico')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('image/favicon.ico')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo e(asset('image/favicon.ico')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo e(asset('image/favicon.ico')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo e(asset('image/favicon.ico')); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo e(asset('image/favicon.ico')); ?>" />
        <link rel="icon" type="image/png" href="<?php echo e(asset('/images/fav196.png')); ?>" sizes="196x196" />
        <link rel="icon" type="image/png" href="<?php echo e(asset('/images/fav96.png')); ?>" sizes="96x96" />
        <link rel="icon" type="image/png" href="<?php echo e(asset('/images/fav32.png')); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo e(asset('/images/fav16.png')); ?>" sizes="16x16" />
        <link rel="icon" type="image/png" href="<?php echo e(asset('/images/fav128.png')); ?>" sizes="128x128" />
        <meta name="application-name" content="&nbsp;"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="<?php echo e(asset('image/favicon.ico')); ?>" />
        <meta name="msapplication-square70x70logo" content="<?php echo e(asset('image/favicon.ico')); ?>" />
        <meta name="msapplication-square150x150logo" content="<?php echo e(asset('image/favicon.ico')); ?>" />
        <meta name="msapplication-wide310x150logo" content="<?php echo e(asset('image/favicon.ico')); ?>" />
        <meta name="msapplication-square310x310logo" content="<?php echo e(asset('image/favicon.ico')); ?>" />

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">

    </head>

    <body>


        <?php echo $__env->yieldContent('content'); ?>

        <script src="js/app.js"></script>
    </body>
</html>
<?php /**PATH /Users/rikvermeulen/Documents/websites/onepages3/resources/views/layout.blade.php ENDPATH**/ ?>