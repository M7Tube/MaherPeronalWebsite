<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('lang.Statistics')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.statistics.statistics')->html();
} elseif ($_instance->childHasBeenRendered('AO8k9ge')) {
    $componentId = $_instance->getRenderedChildComponentId('AO8k9ge');
    $componentTag = $_instance->getRenderedChildComponentTagName('AO8k9ge');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AO8k9ge');
} else {
    $response = \Livewire\Livewire::mount('dashboard.statistics.statistics');
    $html = $response->html();
    $_instance->logRenderedChild('AO8k9ge', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/Dashboard/Statistics/Statistics.blade.php ENDPATH**/ ?>