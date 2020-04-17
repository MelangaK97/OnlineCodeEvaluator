<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index() {
		return view('User/Student/Home');
	}

    public function viewCourse() {
        return view('User/Student/ViewCourse');
    }

    public function viewAssignment() {
        return view('User/Student/ViewAssignment');
    }

    public function viewGrade() {
        return view('User/Student/ViewGrade');
    }
}
