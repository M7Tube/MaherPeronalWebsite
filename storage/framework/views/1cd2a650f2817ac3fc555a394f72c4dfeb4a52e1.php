<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Client Messages')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.messages.messages')->html();
} elseif ($_instance->childHasBeenRendered('BwC8CR9')) {
    $componentId = $_instance->getRenderedChildComponentId('BwC8CR9');
    $componentTag = $_instance->getRenderedChildComponentTagName('BwC8CR9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BwC8CR9');
} else {
    $response = \Livewire\Livewire::mount('dashboard.messages.messages');
    $html = $response->html();
    $_instance->logRenderedChild('BwC8CR9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/ClientMessages/ClientMessages.blade.php ENDPATH**/ ?>