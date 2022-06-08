<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Create Pdf')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.pdf.create-pdf')->html();
} elseif ($_instance->childHasBeenRendered('8YHVUUZ')) {
    $componentId = $_instance->getRenderedChildComponentId('8YHVUUZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('8YHVUUZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8YHVUUZ');
} else {
    $response = \Livewire\Livewire::mount('dashboard.pdf.create-pdf');
    $html = $response->html();
    $_instance->logRenderedChild('8YHVUUZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Pdf/CreatePdf.blade.php ENDPATH**/ ?>