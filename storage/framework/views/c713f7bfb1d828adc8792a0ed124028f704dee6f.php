<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Items')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.items.items')->html();
} elseif ($_instance->childHasBeenRendered('Cdg85QI')) {
    $componentId = $_instance->getRenderedChildComponentId('Cdg85QI');
    $componentTag = $_instance->getRenderedChildComponentTagName('Cdg85QI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Cdg85QI');
} else {
    $response = \Livewire\Livewire::mount('dashboard.items.items');
    $html = $response->html();
    $_instance->logRenderedChild('Cdg85QI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Items/Items.blade.php ENDPATH**/ ?>