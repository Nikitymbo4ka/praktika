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



    <link rel="stylesheet" href="<?php echo e(asset('css/style3.css')); ?>">

    <?php echo $__env->yieldPushContent('style'); ?>
    <title>Document</title>
    <script src="https://kit.fontawesome.com/628c8d2499.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<div class="menu">
    <div class="logom">
        <p><img style="width: 400px" src="imeg/logo.png" alt=""></p>
    </div>
    <a class="menu-o" href="<?php echo e(route('home')); ?>">Главная</a>


    <div class="dropdown">
        <a class="menu-o" href="<?php echo e(route('siteME')); ?>">Контакты</a>
    </div>
    <a class="menu-o" href="<?php echo e(route('siteME')); ?>">О нас <span class="palka"></span></a>
    <?php if(auth()->guard()->check()): ?>
    <a class="menu-o" href="<?php echo e(route("statia")); ?>">Добавить новость</a>
    <?php endif; ?>

<?php if(auth()->guard()->guest()): ?>
        <a class="menu-o" href="<?php echo e(route("register.create")); ?>">Авторизация/Регистрация</a>
    <?php endif; ?>
    <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(route('logout')); ?>" class="menu-o <?php if(Request::is('logout')): ?> active-a <?php endif; ?>"> ВЫХОД ("<?php echo e(auth()->user()->name); ?>")</a>
    <?php endif; ?>
</div>

<div class="content">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<script src="<?php echo e(asset('js/welcome.js')); ?>"></script>
</body>
</html>
<?php /**PATH Z:\ПАПКИ СТУДЕНТОВ\23\Рычков Никита\Практика\example-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>