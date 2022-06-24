<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo e(asset('css/demo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style3.css')); ?>">

    <?php echo $__env->yieldPushContent('style'); ?>
    <title>Document</title>

<body>
<div class="container">
    <header class="codrops-header">

        <nav class="codrops-demos">

            <h1 class="welcome-name">SleepToNight</h1>
            <a href="<?php echo e(route('register')); ?>" class="current-demo">Авторизация/Регистрация</a>

        </nav>
    </header>
    <nav id="bt-menu" class="bt-menu">

        <a href="#" class="bt-menu-trigger"></a>
        <ul>
            <li><a href="#" class="bt-icon icon-speaker ">Кто не доволен что мы совы?</a></li>
            <li><a href="#" class="bt-icon icon-sun ">Как лучше спать?</a></li>
            <li><a href="#" class="bt-icon icon-windows ">Наши сны?</a></li>
            <li><a href="#" class="bt-icon icon-user-outline ">О нас</a></li>
        </ul>
    </nav>
</div>
<script src="<?php echo e(asset('js/borderMenu.js')); ?>"></script>
<script src="<?php echo e(asset('js/classie.js')); ?>"></script>
<script src="<?php echo e(asset('js/modernizr.custom.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\33\HELP\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>