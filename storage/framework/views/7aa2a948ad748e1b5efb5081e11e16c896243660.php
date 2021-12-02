<script src="../resources/js/converter.js"></script>

<form class = "main-form" method="POST" action="<?php echo e(route("converter.convert")); ?>">
    <?php echo csrf_field(); ?>

    <?php if(Session::has('Converted')): ?>
        <div>
            Converted value = <?php echo e(Session::get('Converted')); ?>

        </div>
    <?php endif; ?>

    <div class="form-labels">
    <div class="form-control">
        <label for="sum">Summ</label>
        <input id="sum" name="sum" type="text" class="<?php $__errorArgs = ['sum'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
        <?php $__errorArgs = ['sum'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-control">
        <label for="currency">From</label>
        <?php echo e(Form::select("currency_from", $currencies ?? [])); ?>

        <?php $__errorArgs = ['currency_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-control">
        <label for="currency">To</label>
        <?php echo e(Form::select("currency_to", $currencies ?? [])); ?>

        <?php $__errorArgs = ['currency_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    </div>
    <div class="form-control button-container">
        <button type="submit">Ok</button>
    </div>

</form>
<?php /**PATH D:\lab\OpenServer\domains\lab7.2\resources\views/converter/form.blade.php ENDPATH**/ ?>