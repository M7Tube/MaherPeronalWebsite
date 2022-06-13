<div>
    <section id="services" class="services-mf route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            <?php echo e(__('Services')); ?>

                        </h3>
                        <p class="subtitle-a">
                            <?php echo e(__('Services Description **NEED TO BE EDITED')); ?>

                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if(app()->getLocale() == 'ar'): ?>
                        <div class="col-md-4">
                            <div class="service-box">
                                <div class="service-ico">
                                    <span class="ico-circle"><i class="<?php echo e($service->icon); ?>"></i></span>
                                </div>
                                <div class="service-content">
                                    <h2 class="s-title"><?php echo e($service->ar_name); ?></h2>
                                    <p class="s-description text-center">
                                        <?php echo e($service->ar_desc); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="col-md-4">
                            <div class="service-box">
                                <div class="service-ico">
                                    <span class="ico-circle"><i class="<?php echo e($service->icon); ?>"></i></span>
                                </div>
                                <div class="service-content">
                                    <h2 class="s-title"><?php echo e($service->en_name); ?></h2>
                                    <p class="s-description text-center">
                                        <?php echo e($service->en_desc); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h4 class="text-center"><?php echo e(__('Empty')); ?></h4>
                <?php endif; ?>
            </div>
            <?php echo e($services->links()); ?>

        </div>
    </section>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/livewire/services/services.blade.php ENDPATH**/ ?>