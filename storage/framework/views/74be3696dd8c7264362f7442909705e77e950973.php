<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Create Skill')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.skills.create-skill')->html();
} elseif ($_instance->childHasBeenRendered('haQzLmY')) {
    $componentId = $_instance->getRenderedChildComponentId('haQzLmY');
    $componentTag = $_instance->getRenderedChildComponentTagName('haQzLmY');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('haQzLmY');
} else {
    $response = \Livewire\Livewire::mount('dashboard.skills.create-skill');
    $html = $response->html();
    $_instance->logRenderedChild('haQzLmY', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Skills/CreateSkill.blade.php ENDPATH**/ ?>