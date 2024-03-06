<?php
namespace Controller;

use Illuminate\Database\Capsule\Manager as DB;
use Src\View;
use Model\User;
use Model\Subject;
use Model\GroupToSubjects;
use Model\Group;
use Model\Student;
use Model\Progress;
use Src\Auth\Auth;
use Src\Request;

class Site
{

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/main_page');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/');
    }

    public function main_page(): string
    {
        if(app()->auth->user()->role == 'admin') {
            $employees = DB::table('users')->get();
            return (new View())->render('site.main_page_admin', ['employees' => $employees]);
        }
        $groups = DB::table('groups')->get();
        $students = DB::table('students')->get();
        $subjects = DB::table('subjects')->get();
        return (new View())->render('site.main_page_empl', ['groups' => $groups, 'students' => $students, 'subjects' => $subjects]);
    }

    public function all_employees(): string
    {
        $employees = DB::table('users')->get();
        return (new View())->render('site.all_employees', ['employees' => $employees]);
    }

    public function add_employee(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/main_page');
        }
        return new View('site.add_employee');
    }

    public function del_employee(Request $request): string
    {
        $employees = DB::table('users')->get();
        if ($request->method === 'POST') {
            $ids[] = $request->get('yes');

            foreach($ids as $id) {
            User::where('id', $id)->delete();
            }

            app()->route->redirect('/employees');
        }

        return new View('site.del_employee', ['employees' => $employees]);
    }

    public function all_groups(): string
    {
        $groups = DB::table('groups')->get();
        return (new View())->render('site.all_groups', ['groups' => $groups]);
    }

    public function all_students(): string
    {
        $students = DB::table('students')->get();
        return (new View())->render('site.all_students', ['students' => $students]);
    }

    public function all_subjects(): string
    {
        $subjects = DB::table('subjects')->get();
        return (new View())->render('site.all_subjects', ['subjects' => $subjects]);
    }

    public function add_subject(Request $request): string
    {
        if ($request->method === 'POST' && Subject::create($request->all())) {
            app()->route->redirect('/subjects');
        }
        return new View('site.add_subject');
    }

    public function del_subjects(Request $request): string
    {
        $subjects = DB::table('subjects')->get();
        if ($request->method === 'POST') {
            $ids[] = $request->get('yes');

            foreach($ids as $id) {
                Subject::where('id', $id)->delete();
            }

            app()->route->redirect('/subjects');
        }

        return new View('site.del_subjects', ['subjects' => $subjects]);
    }

    public function add_group(Request $request): string
    {
        $subjects = DB::table('subjects')->get();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Создание новой группы
            $group = new Group();
            $group->name = $_POST['name'];
            $group->course = $_POST['course'];
            $group->semester = $_POST['semester'];
            $group->save();

            // Привязка предметов к группе
            if (isset($_POST['subjects'])) {
                foreach ($_POST['subjects'] as $subjectId) {
                    $groupToSubjects = new GroupToSubjects();
                    $groupToSubjects->subject_id = $subjectId;
                    $groupToSubjects->group_name = $group->name;
                    $groupToSubjects->save();
                }
            }
            app()->route->redirect('/groups');
        }
        return new View('site.add_group', ['subjects' => $subjects]);
    }

    public function del_groups(Request $request): string
    {
        $groups = DB::table('groups')->get();
        if ($request->method === 'POST') {
            $names[] = $request->get('yes');

            foreach($names as $name) {
                Group::where('name', $name)->delete();
            }

            app()->route->redirect('/groups');
        }

        return new View('site.del_groups', ['groups' => $groups]);
    }

    public function add_student(Request $request): string
    {
        if ($request->method === 'POST') {
            $studentData = $request->all();

            $group = Group::where('name', $studentData['group_name'])->first();

            if ($group) {
                unset($studentData['group_name']);
                $gender = $request->get('gender');

                $student = new Student();
                $student->fill($studentData);
                $student->gender = $gender;
                $student->group_name = $group->name;
                $student->save();

                app()->route->redirect('/students');
            }
        }
        return new View('site.add_student');
    }

    public function del_students(Request $request): string
    {
        $students = DB::table('students')->get();
        if ($request->method === 'POST') {
            $ids[] = $request->get('yes');

            foreach($ids as $id) {
                Student::where('id', $id)->delete();
            }

            app()->route->redirect('/students');
        }

        return new View('site.del_students', ['students' => $students]);
    }

}
