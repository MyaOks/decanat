<h3 style="margin: 2vh 0 1vh 0; font-size: 40px">Недавние действия</h3>

<?php
foreach ($groups as $group) {
    if(strtotime($group->date_add) >= strtotime('-5 hour')):
        echo '<div style="display: flex; justify-content: space-between; background-color: #3fb0e0; font-size: 30px">';
        echo '<h4>Добавление группы: ' . $group->name . '</h4>';
        echo '<h4>' . $group->date_add . '</h4>';
        echo '</div><br>';
    endif;
}
foreach ($subjects as $subject) {
    if(strtotime($subject->date_add) >= strtotime('-5 hour')):
        echo '<div style="display: flex; justify-content: space-between; background-color: #3fb0e0; font-size: 30px">';
        echo '<h4>Добавление дисциплины: ' . $subject->title . '</h4>';
        echo '<h4>' . $subject->date_add . '</h4>';
        echo '</div><br>';
    endif;
}
foreach ($students as $student) {
    if(strtotime($student->date_add) >= strtotime('-5 hour')):
        echo '<div style="display: flex; justify-content: space-between; background-color: #3fb0e0; font-size: 30px">';
        echo '<h4>Добавление студента: ' . $student->last_name . ' ' . $student->first_name . ' ' . $student->patronumic . '</h4>';
        echo '<h4>' . $student->date_add . '</h4>';
        echo '</div><br>';
    endif;
}
?>
<div style="display: flex; justify-content: space-around">
    <div style="display: flex; flex-direction: column; align-items: center; gap: 2vh">
        <h3 style="margin: 2vh 0 1vh 0; font-size: 40px">Студенты</h3>
        <?php
        $count = 0;
        foreach ($students as $student) {
            $count ++;
            if($count <= 5):
                echo '<div style="display: flex; justify-content: space-between; background-color: #3fb0e0; font-size: 30px">';
                echo '<h4>' . $student->last_name . ' ' . $student->first_name . ' ' . $student->patronumic . '</h4>';
                echo '</div><br>';
            endif;
        }
        ?>
        <h3><a style=" color: black; font-size: 40px" href="<?= app()->route->getUrl('/students') ?>">Все</a></h3>
    </div>

    <div style="display: flex; flex-direction: column; align-items: center; gap: 2vh">
        <h3 style="margin: 2vh 0 1vh 0; font-size: 40px">Группы</h3>
        <?php
        $count = 0;
        foreach ($groups as $group) {
            $count ++;
            if($count <= 5):
                echo '<div style="display: flex; justify-content: space-between; background-color: #3fb0e0; font-size: 30px">';
                echo '<h4>' . $group->name . '</h4>';
                echo '</div><br>';
            endif;
        }
        ?>
        <h3><a style=" color: black; font-size: 40px" href="<?= app()->route->getUrl('/groups') ?>">Все</a></h3>
    </div>

    <div style="display: flex; flex-direction: column; align-items: center; gap: 2vh">
        <h3 style="margin: 2vh 0 1vh 0; font-size: 40px">Дисциплины</h3>
        <?php
        $count = 0;
        foreach ($subjects as $subject) {
            $count ++;
            if($count <= 5):
                echo '<div style="display: flex; justify-content: space-between; background-color: #3fb0e0; font-size: 30px">';
                echo '<h4>' . $subject->title . '</h4>';
                echo '</div><br>';
            endif;
        }
        ?>
        <h3><a style=" color: black; font-size: 40px" href="<?= app()->route->getUrl('/subjects') ?>">Все</a></h3>
    </div>
</div>
