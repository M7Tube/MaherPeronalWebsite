<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Skills')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.skills.skills')->html();
} elseif ($_instance->childHasBeenRendered('pASiyWS')) {
    $componentId = $_instance->getRenderedChildComponentId('pASiyWS');
    $componentTag = $_instance->getRenderedChildComponentTagName('pASiyWS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('pASiyWS');
} else {
    $response = \Livewire\Livewire::mount('dashboard.skills.skills');
    $html = $response->html();
    $_instance->logRenderedChild('pASiyWS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Skills/Skills.blade.php ENDPATH**/ ?>