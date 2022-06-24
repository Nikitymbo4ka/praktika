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
    <style>
        /* Стиль Выпадающей Кнопки */
        .dropbtn {
            background-color: #262626;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* контейнер <div> - необходим для размещения выпадающего содержимого */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Выпадающей контент (по умолчанию скрыт) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 400px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Ссылки внутри выпадающего списка */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 20px;
            font-family: "Roboto", sans-serif;
        }

        /* Изменить цвет выпадающих ссылок при наведении */
        .dropdown-content a:hover {background-color: #134ab7
        }

        /* Показать выпадающее меню при наведении */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Изменить цвет фона выпадающего кнопка при отображении выпадающего списка */
        .dropdown:hover .dropbtn {
            background-color: #23236b;
        }
    </style>
</head>
<body>

<div class="menu">
    <div class="logom">
        <img src="<?php echo e(asset('/imeg/son.jpg')); ?>" class="logo">
        <p style="margin-left: 20px;color: #9fa5c6;font-size: 30px;font-family: 'Sitka Text'">SleepToNight</p>
    </div>
    <a class="menu-o" href="<?php echo e(route('home')); ?>">Главная</a>


    <div class="dropdown">
        <button style="font-size: 20px;font-family:Roboto, sans-serif " class="dropbtn">Категории</button>
        <div class="dropdown-content">
            <a href="<?php echo e(route('siteKto')); ?>">Кто недоволен что мы совы?</a>
            <a href="<?php echo e(route('siteCni')); ?>">Наши сны</a>
            <a href="<?php echo e(route('siteSleep')); ?>">Как лучше спать?</a>
        </div>
    </div>
    <a class="menu-o" href="<?php echo e(route('siteME')); ?>">О нас</a>
    <?php if(auth()->guard()->check()): ?>
    <a class="menu-o" href="<?php echo e(route("statia")); ?>">Добавить статью</a>
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
<?php /**PATH Z:\ПАПКИ СТУДЕНТОВ\23\ПРОЕКТЫ МУРУГОВ\Рычков и Крылов\HELP\example-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>