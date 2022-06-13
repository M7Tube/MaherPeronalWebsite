<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3"><?php echo e(__('Posts')); ?></h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <?php echo e(__('Main Title')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <?php echo e(__('Title')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <?php echo e(__('Body')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <?php echo e(__('Picture')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <?php echo e(__('KeyWords')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        <?php echo e(__('User')); ?></th>
                                    <th class=""> <a
                                            href="<?php echo e(route('CreatePost', app()->getLocale())); ?>"
                                            class="text-white btn-success btn font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            <?php echo e(__('Create')); ?>

                                        </a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $P; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?php echo e($data->main_title); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?php echo e($data->title); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                <?php echo e(substr($data->body, 0, 25) . '...'); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $data->picture)); ?>" alt="picture" width="150px"></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?php echo e($data->keywords); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?php echo e($data->user->name ?? ''); ?>

                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            <a href="<?php echo e(route('EditPost', [app()->getLocale(), 'id' => $data->post_id])); ?>"
                                                class="btn-outline-success font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                <?php echo e(__('Edit')); ?>

                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td><?php echo e(__('Empty')); ?></td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php echo e($P->links()); ?>

        </div>
    </div>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/livewire/dashboard/posts/posts.blade.php ENDPATH**/ ?>