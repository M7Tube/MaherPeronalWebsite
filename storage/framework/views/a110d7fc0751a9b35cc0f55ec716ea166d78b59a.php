<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Create Item')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.items.create-item')->html();
} elseif ($_instance->childHasBeenRendered('yvoIyST')) {
    $componentId = $_instance->getRenderedChildComponentId('yvoIyST');
    $componentTag = $_instance->getRenderedChildComponentTagName('yvoIyST');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yvoIyST');
} else {
    $response = \Livewire\Livewire::mount('dashboard.items.create-item');
    $html = $response->html();
    $_instance->logRenderedChild('yvoIyST', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Items/CreateItem.blade.php ENDPATH**/ ?>