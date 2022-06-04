<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('lang.Edit Service')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.services.edit-service')->html();
} elseif ($_instance->childHasBeenRendered('Fso3Wds')) {
    $componentId = $_instance->getRenderedChildComponentId('Fso3Wds');
    $componentTag = $_instance->getRenderedChildComponentTagName('Fso3Wds');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Fso3Wds');
} else {
    $response = \Livewire\Livewire::mount('dashboard.services.edit-service');
    $html = $response->html();
    $_instance->logRenderedChild('Fso3Wds', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Services/EditService.blade.php ENDPATH**/ ?>