<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Posts')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.posts.posts')->html();
} elseif ($_instance->childHasBeenRendered('BoHy3oq')) {
    $componentId = $_instance->getRenderedChildComponentId('BoHy3oq');
    $componentTag = $_instance->getRenderedChildComponentTagName('BoHy3oq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BoHy3oq');
} else {
    $response = \Livewire\Livewire::mount('dashboard.posts.posts');
    $html = $response->html();
    $_instance->logRenderedChild('BoHy3oq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Posts/Posts.blade.php ENDPATH**/ ?>