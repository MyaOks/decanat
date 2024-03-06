<?php
if (app()->auth->user()->role == 'employee'):
    ?>

    <form method="post" style="display: flex; flex-direction: column; justify-content: center">

        <div style="text-align: center; margin: 2vh 0 1vw 0;">
            <h2 style="font-size: 40px">Удаление студента</h2>
        </div>

        <?php

        foreach ($students as $student) {
            echo '<div style="display: flex; justify-content: space-between; background-color: #3fb0e0; font-size: 30px">';
            echo '<h4>' . $student->last_name . ' ' . $student->first_name . ' ' . $student->patronumic . '</h4>';
            echo '<h4>' . $student->date_add . '</h4>';
            echo '<input style="margin-right: 2vw" type="checkbox" name="yes" value= ' . $student->id .'>';
            echo '</div><br>';
        }
        ?>
        <button style="border: none; background-color: #3fb0e0;
        height: 5vh; width: 12vw; border-radius: 20%; font-size: 25px; margin: auto">Удалить</button>
    </form>
<?php elseif (app()->auth->user()->role == 'admin'):?>

    <h2 style="font-size: 100px; text-align: center">Доступ запрещён!</h2>

<?php endif; ?>
