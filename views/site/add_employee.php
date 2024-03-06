<?php
if (app()->auth->user()->role == 'admin'):
    ?>

<div style="display: flex; justify-content: center; margin-top: 2vh">
    <h2 style="font-size: 40px">Добавление сотрудника</h2>
</div>

    <form method="post" style="margin-top: 2vh; display: flex;
    flex-direction: column; align-items: center; gap: 5vh; font-size: 25px">
        <div>
            <label for="name">Имя</label><br>
            <input style="height: 5vh; width: 45vw;" id="name" type="text" name="name" placeholder="Введите имя">
        </div>
        <div>
            <label for="login">Логин</label><br>
            <input style="height: 5vh; width: 45vw;" id="login" type="text" name="login" placeholder="Введите логин">
        </div>
        <div>
            <label for="password">Пароль</label><br>
            <input style="height: 5vh; width: 45vw;" id="password" type="password" name="password" placeholder="Введите пароль">
        </div>
        <div>
            <label for="role">Роль</label><br>
            <select style="height: 5vh; width: 45vw;" id="role" name="role">
                <option value="admin">Админ</option>
                <option value="employee">Сотрудник</option>
            </select>
        </div>
        <button style="border: none; background-color: #3fb0e0;
        height: 5vh; width: 12vw; border-radius: 20%; font-size: 25px">Добавить</button>
    </form>
<?php elseif (app()->auth->user()->role == 'employee'):?>

    <h2 style="font-size: 100px; text-align: center">Доступ запрещён!</h2>

<?php endif; ?>