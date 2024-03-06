<?php
if (app()->auth->user()->role == 'employee'):
    ?>

    <div style="display: flex; justify-content: center; margin-top: 2vh">
        <h2 style="font-size: 40px">Добавление студента</h2>
    </div>

    <form method="post" style="margin-top: 2vh; display: flex; align-items: center; justify-content: center; gap: 7vh; font-size: 25px">
        <div style="display: flex; flex-direction: column; gap: 3vh">
            <div>
                <label for="last_name">Фамилия</label><br>
                <input style="height: 5vh; width: 20vw;" id="last_name" type="text" name="last_name" placeholder="Введите фамилию студента">
            </div>
            <div>
                <label for="first_name">Имя</label><br>
                <input style="height: 5vh; width: 20vw;" id="first_name" type="text" name="first_name" placeholder="Введите имя студента">
            </div>
            <div>
                <label for="patronumic">Отчество</label><br>
                <input style="height: 5vh; width: 20vw;" id="patronumic" type="text" name="patronumic" placeholder="Введите отчество студента">
            </div>
            <div style="display: flex; gap: 2vw">
                <span>Пол</span>
                <div>
                    <input id="male" type="checkbox" name="gender" value="М">
                    <label for="male">М</label>
                </div>
                <div>
                    <input id="female" type="checkbox" name="gender" value="Ж">
                    <label for="female">Ж</label>
                </div>
            </div>

            <div>
                <label for="date_of_birth">Дата рождения</label><br>
                <input style="height: 5vh; width: 20vw;" id="date_of_birth" type="date" name="date_of_birth" placeholder="Введите дату рождения">
            </div>
        </div>
        <div style="display: flex; flex-direction: column; gap: 3vh; align-items: center">
            <div>
                <label for="address">Адрес прописки</label>
                <input style="height: 5vh; width: 20vw;" id="address" type="text" name="address" placeholder="Введите адрес прописки">
            </div>
            <div>
                <label for="group_name">Учебная группа</label>
                <input style="height: 5vh; width: 20vw;" id="group_name" type="text" name="group_name" placeholder="Введите номер группы">
            </div>
            <button style="border: none; background-color: #3fb0e0;
        height: 5vh; width: 12vw; border-radius: 20%; font-size: 25px">Добавить</button>
        </div>

    </form>
<?php elseif (app()->auth->user()->role == 'admin'):?>

    <h2 style="font-size: 100px; text-align: center">Доступ запрещён!</h2>

<?php endif; ?>

