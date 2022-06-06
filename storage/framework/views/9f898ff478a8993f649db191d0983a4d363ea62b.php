<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Edit Skill')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.skills.edit-skill')->html();
} elseif ($_instance->childHasBeenRendered('7K5oipY')) {
    $componentId = $_instance->getRenderedChildComponentId('7K5oipY');
    $componentTag = $_instance->getRenderedChildComponentTagName('7K5oipY');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7K5oipY');
} else {
    $response = \Livewire\Livewire::mount('dashboard.skills.edit-skill');
    $html = $response->html();
    $_instance->logRenderedChild('7K5oipY', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Skills/EditSkill.blade.php ENDPATH**/ ?>