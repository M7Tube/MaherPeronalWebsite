<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('lang.Settings')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.setttings.settings')->html();
} elseif ($_instance->childHasBeenRendered('iubqnGc')) {
    $componentId = $_instance->getRenderedChildComponentId('iubqnGc');
    $componentTag = $_instance->getRenderedChildComponentTagName('iubqnGc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iubqnGc');
} else {
    $response = \Livewire\Livewire::mount('dashboard.setttings.settings');
    $html = $response->html();
    $_instance->logRenderedChild('iubqnGc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/Dashboard/Settings/Settings.blade.php ENDPATH**/ ?>