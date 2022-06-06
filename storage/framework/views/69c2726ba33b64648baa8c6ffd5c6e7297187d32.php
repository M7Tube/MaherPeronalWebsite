<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Edit Item')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.items.edit-items')->html();
} elseif ($_instance->childHasBeenRendered('58BjdBu')) {
    $componentId = $_instance->getRenderedChildComponentId('58BjdBu');
    $componentTag = $_instance->getRenderedChildComponentTagName('58BjdBu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('58BjdBu');
} else {
    $response = \Livewire\Livewire::mount('dashboard.items.edit-items');
    $html = $response->html();
    $_instance->logRenderedChild('58BjdBu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Items/EditItem.blade.php ENDPATH**/ ?>