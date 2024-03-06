<?php
if (app()->auth->user()->role == 'employee'):
    ?>

    <form method="post" style="display: flex; flex-direction: column; justify-content: center">

        <div style="text-align: center; margin: 2vh 0 1vw 0;">
            <h2 style="font-size: 40px">Удаление группы</h2>
        </div>

        <?php

        foreach ($groups as $group) {
            echo '<div style="display: flex; justify-content: space-between; background-color: #3fb0e0; font-size: 30px">';
            echo '<h4>' . $group->name . '</h4>';
            echo '<h4>' . $group->date_add . '</h4>';
            echo '<input style="margin-right: 2vw" type="checkbox" name="yes" value= ' . $group->name .'>';
            echo '</div><br>';
        }
        ?>
        <button style="border: none; background-color: #3fb0e0;
        height: 5vh; width: 12vw; border-radius: 20%; font-size: 25px; margin: auto">Удалить</button>
    </form>
<?php elseif (app()->auth->user()->role == 'admin'):?>

    <h2 style="font-size: 100px; text-align: center">Доступ запрещён!</h2>

<?php endif; ?>
