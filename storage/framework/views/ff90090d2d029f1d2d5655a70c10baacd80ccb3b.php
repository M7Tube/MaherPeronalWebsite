<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Posts')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.posts.posts')->html();
} elseif ($_instance->childHasBeenRendered('Ef2smSK')) {
    $componentId = $_instance->getRenderedChildComponentId('Ef2smSK');
    $componentTag = $_instance->getRenderedChildComponentTagName('Ef2smSK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Ef2smSK');
} else {
    $response = \Livewire\Livewire::mount('dashboard.posts.posts');
    $html = $response->html();
    $_instance->logRenderedChild('Ef2smSK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Posts/Posts.blade.php ENDPATH**/ ?>