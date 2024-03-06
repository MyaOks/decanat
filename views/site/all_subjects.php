<?php
if (app()->auth->user()->role == 'employee'):
    ?>

<div>
    <h3 style="margin: 2vh 0 1vh 0; font-size: 40px">Все дисциплины</h3>
    <div>
        <select style="height: 5vh; width: 45vw;" id="subjects" name="subjects[]" multiple>
            <?php
            foreach ($subjects as $subject)
            {
                echo "<option value = '" . $subject -> id . "'>" . $subject -> title . "</option>";
            }
            ?>
        </select>
    </div>
</div>


    <?php
    foreach ($subjects as $subject) {
        echo '<div style="display: flex; justify-content: space-between; background-color: #3fb0e0; font-size: 30px">';
        echo '<h4>' . $subject->title . '</h4>';
        echo '<h4>' . $subject->date_add . '</h4>';
        echo '</div><br>';
    }
    ?>
    <div style="display: flex; justify-content: space-around; margin-top: 2vh">
        <div style="border: none; background-color: #3fb0e0;
        height: 5vh; width: 12vw; font-size: 25px; display: flex; align-items: center; justify-content: center"><a style="text-decoration: none; color: black; font-size: 30px" href="<?= app()->route->getUrl('/add_subject') ?>">Добавить</a></div>

        <div style="border: none; background-color: #3fb0e0;
        height: 5vh; width: 12vw; font-size: 25px; display: flex; align-items: center; justify-content: center"><a style="text-decoration: none; color: black; font-size: 30px" href="<?= app()->route->getUrl('/del_subjects') ?>">Удалить</a></div>
    </div>
<?php elseif (app()->auth->user()->role == 'admin'):?>

    <h2 style="font-size: 100px; text-align: center">Доступ запрещён!</h2>

<?php endif; ?>