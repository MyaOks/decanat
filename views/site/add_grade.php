<?php
if (app()->auth->user()->role == 'employee'):
    ?>

    <div style="display: flex; justify-content: center; margin-top: 2vh">
        <h2 style="font-size: 40px">Фиксирование оценок</h2>
    </div>

    <form method="post" style="margin-top: 2vh; display: flex;
    flex-direction: column; align-items: center; gap: 5vh; font-size: 25px">
        <div>
            <label for="student_id">Студент</label>
            <select style="width: 12vw" name="student_id">
                <?php
                    foreach ($students as $student) {
                        echo "<option value = '" . $student -> last_name . ' ' . $student -> first_name . ' '. $student -> patronumic . "'>" . $student -> last_name. "</option>";
                    }
                ?>
            </select>
        </div>
        <div>
            <label for="subject_id">Дисциплина</label>
            <select style="width: 12vw" name="subject_id">
                <?php
                foreach ($subjects as $subject) {
                    echo "<option value = '" . $subject -> title . "'>" . $subject -> title . "</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="grade">Оценка</label>
            <input style="width: 12vw" type="number" name="grade" min="0" max="5" required>
        </div>
        <div>
            <label for="total_hours">Общее количество часов</label>
            <input style="width: 12vw" type="number" name="total_hours" min="0" required>
        </div>
        <div>
            <label for="control_type">Вид контроля:</label>
            <input style="width: 12vw" type="text" name="control_type" required>
        </div>
        <button style="border: none; background-color: #3fb0e0;
        height: 5vh; width: 12vw; border-radius: 20%; font-size: 25px">Поставить</button>
    </form>
<?php elseif (app()->auth->user()->role == 'admin'):?>

    <h2 style="font-size: 100px; text-align: center">Доступ запрещён!</h2>

<?php endif; ?>

