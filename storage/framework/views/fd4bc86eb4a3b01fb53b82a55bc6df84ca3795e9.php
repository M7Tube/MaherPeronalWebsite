<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Create Post')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.posts.create-post')->html();
} elseif ($_instance->childHasBeenRendered('LiOoMWy')) {
    $componentId = $_instance->getRenderedChildComponentId('LiOoMWy');
    $componentTag = $_instance->getRenderedChildComponentTagName('LiOoMWy');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LiOoMWy');
} else {
    $response = \Livewire\Livewire::mount('dashboard.posts.create-post');
    $html = $response->html();
    $_instance->logRenderedChild('LiOoMWy', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Posts/CreatePost.blade.php ENDPATH**/ ?>