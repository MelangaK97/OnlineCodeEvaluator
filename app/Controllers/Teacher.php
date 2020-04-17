<?php namespace App\Controllers;

class Teacher extends BaseController
{
    public function index() {
        return view('User/Teacher/CreateAssignment');
    }
}
