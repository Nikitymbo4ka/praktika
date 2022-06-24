<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>FORMAAA</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>

    <link rel="stylesheet" href="<?php echo e(asset('css/forma.css')); ?>">


</head>

<body>

<!-- Form-->
<div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">


        <div class="form-header">
            <h1>Добавить статью</h1>
        </div>
        <div class="form-content">
            <form action="<?php echo e(route('statia.submit')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" id="title" name="title"/>
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span style="color: red"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea id="description" type="text" name="description" cols="40" rows="3" style="width: 450px; height: 180px;"></textarea>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span style="color: red"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <button style="color: #ffffff;margin-top: 15px" type="submit">Добавить</button>
                </div>
            </form>
        </div>
    </div>






</body>
</html>
<?php /**PATH C:\OSPanel\domains\localhost\example-app\resources\views/statia.blade.php ENDPATH**/ ?>