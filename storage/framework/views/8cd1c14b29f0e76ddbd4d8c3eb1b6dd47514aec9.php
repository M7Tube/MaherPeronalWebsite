<div>
    <section id="items" class="portfolio-mf  route">
        <div class="container mb-5">
            
            <div class="row">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        <?php echo e(__('Items')); ?>

                    </h3>
                    <p class="subtitle-a">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                    <div class="line-mf"></div>
                </div>
                <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-md-4">
                        <a href="<?php echo e(route('ShowItem', [app()->getLocale(), 'id' => $item->item_id])); ?>"
                            style="text-decoration: none;">
                            <div class="work-box">
                                
                                <div class="work-img">
                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $item->picture)); ?>" alt="Picture"
                                        class="img-fluid">
                                </div>
                                
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <?php if(app()->getLocale() == 'ar'): ?>
                                                <h2 class="w-title"><?php echo e($item->ar_name); ?></h2>
                                            <?php else: ?>
                                                <h2 class="w-title"><?php echo e($item->en_name); ?></h2>
                                            <?php endif; ?>
                                            <?php if(app()->getLocale() == 'ar'): ?>
                                                <div class="w-more">
                                                    <span class="text-center"><?php echo e($item->ar_desc); ?></span><br>
                                                    <span class="w-date"><?php echo e($item->created_at); ?></span>
                                                </div>
                                            <?php else: ?>
                                                <div class="w-more">
                                                    <span class="text-center"><?php echo e($item->en_desc); ?></span><br>
                                                    <span class="w-date"><?php echo e($item->created_at); ?></span>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h4 class="text-center"><?php echo e(__('Empty')); ?></h4>
                <?php endif; ?>
            </div>
            <?php echo e($items->links()); ?>

        </div>
    </section><!-- End Portfolio Section -->
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/livewire/items/items.blade.php ENDPATH**/ ?>