<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index() {
        return view('welcome_message');
    }

    public function Login() {
        if ($_GET['type'] === 'teacher') {
            return view('User/Teacher/Login');
        } else {
            return view('User/Student/Login');
        }
    }

    public function Courses() {
		return view('User/Student/Courses');
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
