<script src="<?php echo e(asset('js/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/validasi.js')); ?>"></script>
<script src="<?php echo e(asset('js/localization/messages_id.js')); ?>"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
<?php if(empty($web_ui) || $web_ui == false): ?>
    <script src="<?php echo e(asset('js/custom-select2.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom-datetimepicker.js')); ?>"></script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\sidesa\resources\views/admin/layouts/components/validasi_form.blade.php ENDPATH**/ ?>