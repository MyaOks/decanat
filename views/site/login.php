<div style="background-color: #3fb0e0;
text-align: center; font-size: 50px; padding: 2vh 0 2vh 0">
    <h1>Авторизация</h1>
    <h3><?= app()->auth->user()->name ?? ''; ?></h3>
</div>

<?php
if (!app()->auth::check()):
    ?>
    <form method="post" style="margin-top: 25vh; display: flex;
    flex-direction: column; align-items: center; gap: 5vh; font-size: 25px">
        <h3><?= $message ?? ''; ?></h3>
        <div>
            <label for="login">Логин</label><br>
            <input style="height: 5vh; width: 45vw;" id="login" type="text" name="login" placeholder="Введите логин">
        </div>
        <div>
            <label for="password">Пароль</label><br>
            <input style="height: 5vh; width: 45vw;" id="password" type="password" name="password" placeholder="Введите пароль">
        </div>
        <button style="border: none; background-color: #3fb0e0;
        height: 5vh; width: 12vw; border-radius: 20%; font-size: 25px">Войти</button>
    </form>
<?php endif;

