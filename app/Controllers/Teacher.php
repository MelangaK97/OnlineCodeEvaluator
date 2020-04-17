<?php namespace App\Controllers;

class Teacher extends BaseController
{
    public function index() {
        return view('User/Teacher/CreateAssignment');
    }

    public function compiler() {
        return view('User/Teacher/Compiler');
    }

    public function assignments() {
        return view('User/Teacher/Assignments');
    }
}
