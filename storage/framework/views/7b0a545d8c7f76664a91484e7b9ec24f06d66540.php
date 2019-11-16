<?php $__env->startSection('pageTitle', 'error?'); ?>

<?php $__env->startSection('content'); ?>

    
    <?php echo $__env->make('layout.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main>
        <div class="error">
            <div class="error-title">
                <div class="wrap">
                    <h2>Something went kaput</h2>
                    <p class="error-code">404 error</p>
                    <p class="error-message">I couldn't find your page! please feel free to return to the <a href="/">front page</a>. I am very sorry for any inconvenience.</p>
                </div>
            </div>
        </div>
    </main>
    
    <?php echo $__env->make('layout.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rikvermeulen/Documents/websites/onepages3/resources/views/errors/404.blade.php ENDPATH**/ ?>