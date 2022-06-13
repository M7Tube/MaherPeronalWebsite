<div>
    <section id="blog" class="blog-mf route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            <?php echo e(__('Blog')); ?>

                        </h3>
                        <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-md-4 mb-3">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="<?php echo e(route('post', ['id' => $post->post_id])); ?>"><img
                                        src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $post->picture)); ?>" alt="picture"
                                        class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category"><?php echo e($post->main_title); ?></h6>
                                    </div>
                                </div>
                                <h3 class="card-title"><a
                                        href="<?php echo e(route('post', [app()->getLocale(), 'id' => $post->post_id])); ?>"><?php echo e($post->title); ?></a>
                                </h3>
                                <p class="card-description">
                                    <?php echo e(substr($post->body, 0, 100)); ?><a href="" class="text-primary">
                                        <?php echo e(__('...Read More')); ?></a>
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <span class="author"><b><?php echo e($post->user->name); ?></b></span>
                                </div>
                                <div class="post-date">
                                    <span class="bi bi-clock"></span> <?php echo e($post->created_at); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h4 class="text-center"><?php echo e(__('Empty')); ?></h4>
                <?php endif; ?>
            </div>
            <?php echo e($posts->links()); ?>

        </div>
    </section>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/livewire/post/all-post.blade.php ENDPATH**/ ?>