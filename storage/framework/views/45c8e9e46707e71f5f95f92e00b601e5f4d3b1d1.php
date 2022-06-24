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
            <h1>Войдите в аккаунт</h1>
        </div>
        <div class="form-content">
            <form>
                <div class="form-group">
                    <label for="username">Имя пользователя</label>
                    <input type="text" id="username" name="username" required="required"/>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" required="required"/>
                </div>
                <div class="form-group">
                    <label class="form-remember">
                        <input type="checkbox"/>Запомнить меня
                    </label><a class="form-recovery" href="#">Забыли пароль?</a>
                </div>
                <div class="form-group">
                    <button type="submit">Войти</button>
                </div>
            </form>
        </div>
    </div>
    <div class="form-panel two">
        <div class="form-header">
            <h1>Создайте аккаунт</h1>
        </div>
        <div class="form-content">
            <form>
                <div class="form-group">
                    <label for="username">Имя пользователя</label>
                    <input type="text" id="username" name="username" required="required"/>
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" id="email" name="email" required="required"/>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" required="required"/>
                </div>
                <div class="form-group">
                    <label for="cpassword">Подтвердите пароль</label>
                    <input type="password" id="cpassword" name="cpassword" required="required"/>
                </div>
                <div class="form-group">
                    <button style="color: #1b1e88" type="submit">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>

<script src="<?php echo e(asset('js/forma.js')); ?>"></script>


</body>
</html>
<?php /**PATH C:\33\HELP\example-app\resources\views/auth/register.blade.php ENDPATH**/ ?>