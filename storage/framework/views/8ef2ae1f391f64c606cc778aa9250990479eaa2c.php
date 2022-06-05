<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Edit Post')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.posts.edit-post')->html();
} elseif ($_instance->childHasBeenRendered('ZitYeEQ')) {
    $componentId = $_instance->getRenderedChildComponentId('ZitYeEQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZitYeEQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZitYeEQ');
} else {
    $response = \Livewire\Livewire::mount('dashboard.posts.edit-post');
    $html = $response->html();
    $_instance->logRenderedChild('ZitYeEQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Posts/EditPost.blade.php ENDPATH**/ ?>