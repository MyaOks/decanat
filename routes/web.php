<?php

use Src\Route;

Route::add(['GET', 'POST'], '/', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/main_page', [Controller\Site::class, 'main_page'])
    ->middleware('auth');
Route::add('GET', '/employees', [Controller\Site::class, 'all_employees']);
Route::add(['GET', 'POST'], '/add_employee', [Controller\Site::class, 'add_employee']);
Route::add(['GET', 'POST'], '/del_employees', [Controller\Site::class, 'del_employee']);
Route::add('GET', '/students', [Controller\Site::class, 'all_students']);
Route::add('GET', '/groups', [Controller\Site::class, 'all_groups']);
Route::add('GET', '/subjects', [Controller\Site::class, 'all_subjects']);
Route::add(['GET', 'POST'], '/add_subject', [Controller\Site::class, 'add_subject']);
Route::add(['GET', 'POST'], '/del_subjects', [Controller\Site::class, 'del_subjects']);
Route::add(['GET', 'POST'], '/add_group', [Controller\Site::class, 'add_group']);
Route::add(['GET', 'POST'], '/del_groups', [Controller\Site::class, 'del_groups']);
Route::add(['GET', 'POST'], '/add_student', [Controller\Site::class, 'add_student']);
Route::add(['GET', 'POST'], '/del_students', [Controller\Site::class, 'del_students']);
Route::add(['GET', 'POST'], '/add_grade', [Controller\Site::class, 'add_grade']);

