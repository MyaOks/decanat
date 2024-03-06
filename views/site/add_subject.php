<?php
if (app()->auth->user()->role == 'employee'):
    ?>

    <div style="display: flex; justify-content: center; margin-top: 2vh">
        <h2 style="font-size: 40px">Добавление дисциплины</h2>
    </div>

    <form method="post" style="margin-top: 2vh; display: flex;
    flex-direction: column; align-items: center; gap: 5vh; font-size: 25px">
        <div>
            <label for="title">Название</label><br>
            <input style="height: 5vh; width: 45vw;" id="title" type="text" name="title" placeholder="Введите название дисциплины">
        </div>
        <button style="border: none; background-color: #3fb0e0;
        height: 5vh; width: 12vw; border-radius: 20%; font-size: 25px">Добавить</button>
    </form>
<?php elseif (app()->auth->user()->role == 'admin'):?>

    <h2 style="font-size: 100px; text-align: center">Доступ запрещён!</h2>

<?php endif; ?>