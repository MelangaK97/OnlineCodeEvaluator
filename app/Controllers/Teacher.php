<?php namespace App\Controllers;

class Teacher extends BaseController
{
    public function index() {
        return view('User/Teacher/Courses');
    }

    public function viewCourse() {
        return view('User/Teacher/ViewCourse');
    }

    public function createAssignment() {
        return view('User/Teacher/CreateAssignment');
    }

    public function compiler() {
        return view('User/Teacher/Compiler');
    }

    public function assignments() {
        return view('User/Teacher/Assignments');
    }

    public function issues() {
        return view('User/Teacher/Issues');
    }
}
