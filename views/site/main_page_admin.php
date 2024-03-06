<h3 style="margin: 2vh 0 1vh 0; font-size: 40px">Недавние действия</h3>

<?php
    foreach ($employees as $employee) {
        if(strtotime($employee->date_add) >= strtotime('-5 hour') && $employee->role != 'admin'):
            echo '<div style="display: flex; justify-content: space-between; background-color: #3fb0e0; font-size: 30px">';
            echo '<h4>Добавление: ' . $employee->name . '</h4>';
            echo '<h4>' . $employee->login . '</h4>';
            echo '<h4>' . $employee->date_add . '</h4>';
            echo '</div><br>';
            endif;
        }
    ?>
    <div style="margin: 2vh 0 1vh 0; font-size: 40px; display: flex; justify-content: space-between">
        <h3>Новые сотрудники</h3>
        <h3><a style=" color: black" href="<?= app()->route->getUrl('/employees') ?>">Все сотрудники</a></h3>
    </div>
    <?php
    foreach ($employees as $employee) {
        if(strtotime($employee->date_add) >= strtotime('-1 month') && $employee->role != 'admin'):
            echo '<div style="display: flex; justify-content: space-between; background-color: #3fb0e0; font-size: 30px">';
            echo '<h4>' . $employee->name . '</h4>';
            echo '<h4>' . $employee->login . '</h4>';
            echo '<h4>' . $employee->date_add . '</h4>';
            echo '</div><br>';
            endif;
        }
    ?>