<?php
if (app()->auth->user()->role == 'employee'):
    ?>

    <h3 style="margin: 2vh 0 1vh 0; font-size: 40px">Все студенты</h3>

    <?php
    foreach ($students as $student) {
        echo '<div style="display: flex; justify-content: space-between; background-color: #3fb0e0; font-size: 30px">';
        echo '<h4>' . $student->last_name . ' ' . $student->first_name . ' ' . $student->patronumic . '</h4>';
        echo '<h4>' . $student->date_add . '</h4>';
        echo '</div><br>';
    }
    ?>
    <div style="display: flex; justify-content: space-around; margin-top: 2vh">
        <div style="border: none; background-color: #3fb0e0;
        height: 5vh; width: 16vw; font-size: 25px; display: flex; align-items: center; justify-content: center"><a style="text-decoration: none; color: black; font-size: 30px" href="<?= app()->route->getUrl('/add_grade') ?>">Поставить оценку</a></div>

        <div style="border: none; background-color: #3fb0e0;
        height: 5vh; width: 12vw; font-size: 25px; display: flex; align-items: center; justify-content: center"><a style="text-decoration: none; color: black; font-size: 30px" href="<?= app()->route->getUrl('/add_student') ?>">Добавить</a></div>

        <div style="border: none; background-color: #3fb0e0;
        height: 5vh; width: 12vw; font-size: 25px; display: flex; align-items: center; justify-content: center"><a style="text-decoration: none; color: black; font-size: 30px" href="<?= app()->route->getUrl('/del_students') ?>">Удалить</a></div>
    </div>
<?php elseif (app()->auth->user()->role == 'admin'):?>

    <h2 style="font-size: 100px; text-align: center">Доступ запрещён!</h2>

<?php endif; ?>